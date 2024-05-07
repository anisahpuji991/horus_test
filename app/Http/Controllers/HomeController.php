<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home(){
        $data = Voucher::select('id','nama','foto','status','kategori')->where('status', '0')->get();
        // $kategori =  Voucher::select('kategori')->groupBy('kategori')->get();
        $kategori =  DB::table('vouchers')
					->select(DB::raw('COUNT(*) as total,kategori'))
                    ->where('status', '0')
					->groupby('kategori')
					->get();
        return view('home',compact('data','kategori'));
    }

    public function history(){
        $data = Voucher::select('id','nama','foto','status','kategori',)->where('status', '1')->get();
        // $kategori =  Voucher::select('kategori')->groupBy('kategori')->get();
        $kategori =  DB::table('vouchers')
					->select(DB::raw('COUNT(*) as total,kategori'))
                    ->where('status', '1')
					->groupby('kategori')
					->get();
        return view('history',compact('data','kategori'));
    }

    public function kategori(Request $request){
        $data = new Voucher();

        if($request->name_kategori){
            $data= $data->where('kategori','LIKE', '%'.$request->name_kategori.'%')
            ->where('status', '0');
        }
        $data = $data->get();

        $kategori =  DB::table('vouchers')
					->select(DB::raw('COUNT(*) as total,kategori'))
                    ->where('status', '0')
					->groupby('kategori')
					->get();

        return view('home',compact('data','kategori'));
        //echo "Ini method index";
    }


    public function kategori_history(Request $request){
        $data = new Voucher();

        if($request->name_kategori){
            $data= $data->where('kategori','LIKE', '%'.$request->name_kategori.'%')
            ->where('status', '1');
        }
        $data = $data->get();

        $kategori =  DB::table('vouchers')
					->select(DB::raw('COUNT(*) as total,kategori'))
                    ->where('status', '1')
					->groupby('kategori')
					->get();

        return view('history',compact('data','kategori'));
        //echo "Ini method index";
    }

    public function claim_proses(Request $request, $id){
        $data['status'] = '1';
        Voucher::whereId($id)->update($data);
        return redirect()->route('admin.home');
    }
    
    public function remove_proses(Request $request, $id){
        $data['status'] = '0';
        Voucher::whereId($id)->update($data);
        return redirect()->route('admin.history');
    }

    public function dashboard(){
        $data = Voucher::get();
        return view('dashboard',compact('data'));
    }

}
