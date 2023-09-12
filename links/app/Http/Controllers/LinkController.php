<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Console\Scheduling\Event;

class LinkController extends Controller
{
    public function index($id)
    {
        $datas = Link::all()->where('user_id', $id);
        return view('list-links', ['datas' => $datas]);
    }
    public function add_links()
    {
        return view('add-links');
    }
    public function numero()
    {
        $n = $_POST['numero'];
        return view('add-links', ['n' => $n]);
    }
    public function edit($id)
    {
        $event = Link::findOrFail($id);
        return view('edit-link', ['event' => $event]);
    }
    public function update(Request $request)
    {
        Link::findOrFail($request->id)->update([
            'label' => $request->label,
            'link' => $request->link,
        ]);
        return redirect('/')->with('msg', 'Editado com sucesso');
    }
    public function delete($id)
    {
        Link::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Link Excluido');
    }
    public function store(Request $request)
    {

        foreach ($request->links as $link) {
            $event = new Link;
            $event->user_id = $request->id;
            $event->label = $link['label'];
            $event->link = $link['link'];
            $event->save();
        }
        //return redirect('/')->with('msg', 'Adicionado com sucesoss');
        return $this->index($request->id)->with('msg', 'Adicionado com sucesso');
    }
}
