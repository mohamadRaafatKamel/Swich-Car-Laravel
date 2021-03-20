<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmarhRequest;
use App\Models\Admin;
use App\Models\Agent;
use App\Models\Emarh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::select()->paginate(PAGINATION_COUNT);
        return view('admin.agent.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agent.create');
    }

    public function store(Request $request)
    {
        try {
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            Agent::create($request->except(['_token']));
            return redirect()->route('admin.agent')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.agent.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        $data = Agent::select()->find($id);
        if(!$data){
            return redirect()->route('admin.agent')->with(['error'=>"غير موجود"]);
        }
        return view('admin.agent.edit',compact('data'));
    }

    public function update($id, Request $request)
    {
        try {

            $data = Agent::find($id);
            if (!$data) {
                return redirect()->route('admin.agent.edit', $id)->with(['error' => '  غير موجوده']);
            }
            if (!$request->has('state'))
                $request->request->add(['state' => 0]);
            $data->update($request->except(['_token']));

            return redirect()->route('admin.agent')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.agent')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $admins = Agent::find($id);
            if (!$admins) {
                return redirect()->route('admin.agent', $id)->with(['error' => '  غير موجوده']);
            }
            $admins->delete();

            return redirect()->route('admin.agent')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.agent')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
