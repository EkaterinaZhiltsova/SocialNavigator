<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblActivites;
use App\Models\TblVolunteersApplications;
use App\Models\TblDoctors;
use App\Models\TblStudentsApplications;


class Admin_vol_app extends Controller
{

	
    public function getVolAct_admin() {
		
		$contentVolAct = new TblActivites;
		$contentVolAct = $contentVolAct->all();
		
		
		$contentVolAppl = new TblVolunteersApplications;
		$contentVolAppl = $contentVolAppl->all();
		
		$contentDoctAct = new TblDoctors;
		$contentDoctAct = $contentDoctAct->all();
		
		
		$contentDoctAppl = new TblStudentsApplications;
		$contentDoctAppl = $contentDoctAppl->all();

		
		
		return view('table_forAdmin_vol', ['activity' => $contentVolAct, 'appl'=>$contentVolAppl, 'doctors_meet'=>$contentDoctAct, 'doct_appl'=>$contentDoctAppl]);
	}
}