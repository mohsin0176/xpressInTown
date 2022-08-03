<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use App\Models\Calldetails;
 
class Calldetails extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
            return view('report');
    }
    public function add(Request $request)
    {
        $calldetails=new Calldetails();
        $calldetails->log=$request->log;
        $calldetails->date=$request->date;
        $calldetails->status=$request->status;
        $duration=$request->duration;
        $duration="'.($duration%3600).'"hr"'.(($duration%3600)/60).'"min"'.(($duration%3600)%60).'"sec"";
        $calldetails->duration=$duration;
        $calldetails->save();
        $data=json_encode(array("msg"=>"Data Added Successfully"););
        echo $data;
        $return->redirect()->back();
       
    }
  
    public function fetchall()
    {       
            $receieved_data=json_decode(file_get_contents("php://input"));
            if($receieved_data->action='searchall')
            {
            $data=Calldetails::all()->paginate(20);
            $data=json_encode($data);
            echo $data;
            $return->redirect()->back();
            }
            
    }

    public function fetch()
    {

        
    $receieved_data=json_decode(file_get_contents("php://input"));
    if($receieved_data->action='search')
    {
    $log=$receieved_data->log;
    $from=$receieved_data->from;
    $to=$receieved_data->to;

    if( $log != null && $from != null && $to != null)
    {
    $data=Calldetails::where('log','like','%'.log.'%')
                      ->where('date','>=','from')
                      ->where('date','<=','to')->paginate(20);
                      echo json_encode($data);
    }

    if( $log = null && $from = null && $to = null)
    {
    $data=Calldetails::all()->paginate(20);
    echo json_encode($data);
    }

    if( $log != null && $from = null && $to = null)
    {
    $data=Calldetails::where('log','like','%'.log.'%')
                      ->paginate(20);
                      echo json_encode($data);
    }

    if( $log = null && $from != null && $to != null)
    {
    $data=Calldetails::where('date','>=','from')
                      ->where('date','<=','to')->paginate(20);
                      echo json_encode($data);
    }
    
    if( $log = null && $from != null && $to = null)
    {
    $data=Calldetails::where('date','>=','from')->paginate(20);
    echo json_encode($data);
    }

    if( $log = null && $from = null && $to != null)
    {
    $data=Calldetails::where('date','>=','to')->paginate(20);
    echo json_encode($data);
    }
    $return->redirect()->back();

    }


    
}