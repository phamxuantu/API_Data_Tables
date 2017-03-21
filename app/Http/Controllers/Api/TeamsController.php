<?php

namespace App\Http\Controllers\Api;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sunra\PhpSimple\HtmlDomParser;

class TeamsController extends Controller
{
    public function index(){
        $datas = Team::all();
        return response()->json([
            'success' => $datas->toArray()
        ]);
    }

    public function update(Request $request){
        if(!$request->has('url')){
            return response()->json( [
                'error' => 'not url'
            ]);
        }
        $html = HtmlDomParser::file_get_html('c:/data-test.html');
        $el_root = $html->find('div[class="charts"]')[0];
        $el_table = $el_root->getElementByTagName('table')->children[1];
        $els_row  = $el_table->children;
        foreach ($els_row as $el){
            $chi  = $el->children;
            $team['position'] = $chi[0]->text();
            $team['name'] = $chi[1]->text();
            $team['ST'] = $chi[2]->text();
            $team['T'] = $chi[3]->text();
            $team['H'] = $chi[4]->text();
            $team['B'] = $chi[5]->text();
            $team['TG'] = $chi[6]->text();
            $team['TH'] = $chi[7]->text();
            $team['HS'] = $chi[8]->text();
            $team['DIEM'] = $chi[9]->text();
            $this->updateTeam( $team);
        }

        return response()->json(
            [
                'success' => 'cập nhập thành công'
            ]);

    }


    private function updateTeam($data = array()){
        $team = Team::where('name','like','%'.$data['name'].'%')->first();
        $team->update($data);
    }
}
