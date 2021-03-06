<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Member;
use App\Participant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:participant')->only(['registerConfirmation', 'statusConfirmation']);
    }

    public function getRegister()
    {
        return view('auth.option-register');
    }

    public function registerPersonal(Request $request)
    {
        // return $request->all();
        $imageName = time() . '.' . $request->file('image')->extension();
        $cvFile = time() . '.' . $request->file('member_cv')->extension();
        Member::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $imageName,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'bidang_ilmu' => $request->bidang_ilmu,
            'instansi' => $request->instansi,
            'member_type' => 'perorangan',
            'member_role' => 'member',
            'member_cv' => $cvFile,
        ]);
        $request->file('member_cv')->move(public_path('assets/members/cv'), $cvFile);
        $request->file('image')->move(public_path('assets/members/images'), $imageName);
        return back()->with('update', 'Selamat, Anda Berhasil Mendaftarkan Diri Anda');
    }

    public function getRegisterPersonal()
    {
        return view('auth.register-perorangan');
    }

    public function getRegisterCorporate()
    {
        return view('auth.register-korporasi');
    }

    public function registerCorporate(Request $request)
    {
        $imageName = time() . '.' . $request->file('image')->extension();
        $cvFile = time() . '.' . $request->file('member_cv')->extension();
        Member::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $imageName,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'bidang_ilmu' => $request->bidang_ilmu,
            'instansi' => $request->instansi,
            'jenis_usaha' => $request->jenis_usaha,
            'member_type' => 'korporasi',
            'member_role' => 'member',
            'member_cv' => $cvFile,
        ]);
        $request->file('member_cv')->move(public_path('assets/members/cv'), $cvFile);
        $request->file('image')->move(public_path('assets/members/images'), $imageName);
        return back()->with('update', 'Selamat, Anda Berhasil Mendaftarkan Korporasi Anda');
    }

    public function getRegisterParticipant()
    {
        return view('auth.register-participant');
    }

    public function getLoginParticipant()
    {
        return view('auth.login-participant');
    }

    public function registerParticipant(Request $request)
    {
        $dataValidated = $request->except('password_confirmation');
        $dataValidated = $this->validate($request, [
            'email' => 'required|email',
            'kontak' => 'required|string',
            'nama' => 'required|string',
            'jenis_instansi' => 'required|string',
            'bidang_ilmu' => 'required|string',
            'unit' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'pekerjaan' => 'required|string',
            // 'password' => 'required|confirmed|min:5',
        ]);
        if ($user = Participant::where('email', $dataValidated['email'])->first()) {
            $user->update([
                'email' => $dataValidated['email'],
                'kontak' => $dataValidated['kontak'],
                'nama' => $dataValidated['nama'],
                'jenis_instansi' => $dataValidated['jenis_instansi'],
                'bidang_ilmu' => $dataValidated['bidang_ilmu'],
                'unit' => $dataValidated['unit'],
                'provinsi' => $dataValidated['provinsi'],
                'kabupaten' => $dataValidated['kabupaten'],
                'pekerjaan' => $dataValidated['pekerjaan'],
                'nama_instansi' => $request->nama_instansi,
                'mobile_app' => $request->has('mobile_app'),
                'kabupaten' => strtoupper($request->kabupaten),
                'password' => bcrypt('secret12345678'),
            ]);

            if ($user) {
                auth('participant')->loginUsingId($user->id);
                // return redirect(action('AuthController@registerConfirmation'))->with('save', 'Selamat Anda Berhasil Mendaftar.');
                return redirect(action('AuthController@confirmationSeminar'));
            }
        } else {
            $dataValidated['nama_instansi'] = $request->nama_instansi;
            $dataValidated['referral'] = strtoupper($request->referral);
            $dataValidated['mobile_app'] = $request->has('mobile_app');
            $dataValidated['kabupaten'] = strtoupper($request->kabupaten);
            $dataValidated['password'] = bcrypt('secret12345678');
            $participant = Participant::create($dataValidated);

            if ($participant) {
                auth('participant')->loginUsingId($participant->id);
                // return redirect(action('AuthController@registerConfirmation'))->with('save', 'Selamat Anda Berhasil Mendaftar.');
                return redirect(action('AuthController@confirmationSeminar'));
            }
        }

        return back()->with('error', 'Maaf data anda belum ada di database kami, mohon daftar terlebih dahulu');
    }

    public function confirmationSeminar()
    {
        $certificate = Certificate::orderBy('id', 'desc')->first();
        $checkDuplicate = \DB::table('certificate_participant')->where(['participant_id' => auth('participant')->id(), 'certificate_id' => $certificate->id])->first();
        if ($checkDuplicate) {
            return redirect(action('AuthController@statusConfirmation'))->with('join', 'Anda sudah mendaftar pada seminar ini sebelumnya.');
        }
        $join = \DB::table('certificate_participant')->insert(['participant_id' => auth('participant')->id(), 'certificate_id' => $certificate->id, 'created_at' => now(), 'updated_at' => now()]);
        if ($join) {
            $data = auth('participant')->user();
            // Mail::send('home.mail_seminar', ['name' => $data->nama, 'email' => $data->email], function ($message) use ($data) {
            //     $message->to($data->email)->subject('Pendaftaran Seminar PTPI');
            //     $message->from("seminarptpi@gmail.com", "PTPI Official");
            // });

            return redirect(action('AuthController@statusConfirmation'))->with('join', 'Anda sudah berhasil mendaftar pada seminar ini.');
        }
    }

    public function getSeminarParticipant(Request $request)
    {
        $seminars = Certificate::all()->where('status', true);
        return view('auth.seminar-participant', compact('seminars', 'request'));
    }

    public function statusConfirmation()
    {
        return view('auth.status-seminar');
    }

    public function registerConfirmation()
    {
        $lastCertificate = Certificate::orderBy('id', 'desc')->first();
        return view('auth.seminar-confirmation', compact('lastCertificate'));
    }

    public function temaParticipant(Request $request)
    {
        $participant = Participant::where('email', $request->email)->first();
        if ($participant) {
            $participant->certificate_id = $request->certificate_id;
            $participant->save();
            return redirect(action('AuthController@registerConfirmation'))->with('confirmation', 'Selamat Anda Berhasil Memilih Tema Seminar. <br>Zoom Meeting dapat diakses pada link berikut :<br><i>https://us02web.zoom.us/j/89359627792</i>');
        }
        return back()->with('error', 'Maaf data anda belum ada di database kami, mohon daftar terlebih dahulu');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function loginParticipant(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth('participant')->attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth('participant')->user()->update(['referral' => strtoupper($request->referral), 'kabupaten' => $request->kabupaten])) {
                return redirect(action('AuthController@registerConfirmation'));
            }
            return back();
        }
        return back()->with('error-credential', 'Password atau Email, Salah !');
    }

    public function login(Request $request)
    {

        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            if ($request->email == 'admin@mail.com') {
                // return $request->email;
                return redirect(action('DashboardController@index'));
            } else {
                return redirect(action('UserController@kontribusiSehatRI'));
            }
        }
        if (auth('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(action('DashboardController@index'));
        }
        // if (auth('participant')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect(action('DashboardController@index'));
        // }
        return back();
    }

    public function logout()
    {
        if (auth('admin')->check()) {
            auth('admin')->logout();
        } elseif (auth('web')->check()) {
            auth('web')->logout();
        }elseif(auth('certified')->check()){
            auth('certified')->logout();
        }
        return redirect('/');
    }

    public function eventRegistration()
    {
        return view('auth.event-registration');
    }

    public function getRegisterHospital()
    {
        return view('auth.register-hospital');
    }
    public function registerHospital(Request $request)
    {
        $imageName = time() . '.' . $request->file('image')->extension();
        $cvFile = time() . '.' . $request->file('member_cv')->extension();
        Member::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $imageName,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'bidang_ilmu' => $request->bidang_ilmu,
            'instansi' => $request->instansi,
            'jenis_usaha' => $request->jenis_usaha,
            'member_type' => 'korporasi',
            'member_role' => 'member',
            'member_cv' => $cvFile,
        ]);
        $request->file('member_cv')->move(public_path('assets/members/cv'), $cvFile);
        $request->file('image')->move(public_path('assets/members/images'), $imageName);
        return back()->with('update', 'Selamat, Anda Berhasil Mendaftarkan Korporasi Anda');
    }
}
