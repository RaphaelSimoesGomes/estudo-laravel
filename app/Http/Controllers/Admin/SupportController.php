<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSupportRequest;
use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    #no parametro, ele ja criar o objeto e vai injetar no $support 
    public function index(Support $support)
    {
        $supports = $support->all();


        return view('index', compact('supports'));
    }
    public function show(string|int $id)
    {
        // Support::find($id)
        // Support::where('id',$id)->first();
        // Support::where('id','!=',$id)->first();

        if (!$support = Support::find($id)) {
            return back();
        };
        return view('admin/supports/show', compact('support'));
    }
    public function create()
    {
        return view('admin/supports/create');
    }
    public function store(StoreSupportRequest $request, Support $support)
    {
        $data = $request->validated();
        $data['status'] = 'a';

        $support =  $support->create($data);
        return redirect()->route('index');
    }
    public function edit(Support $support, string|int $id)
    {
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        }
        return view('admin/supports.edit', compact('support'));
    }
    public function update(StoreSupportRequest $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        };

        // $support->subject = $request->subject;
        // $support->body = $request->body;
        // $support->save();

        // $support->update($request->only([
        //     'subject', 'body'
        // ]));
        $support->update($request->validated());
        return redirect()->route('index');
    }
    public function destroy(Support $support, string|int $id,)
    {
        if (!$support = $support->find($id)) {
            return back();
        };
        $support->delete();

        return redirect()->route('index');
    }
}
