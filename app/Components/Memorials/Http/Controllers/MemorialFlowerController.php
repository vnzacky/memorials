<?php namespace App\Components\Memorials\Http\Controllers;

use App\Components\Memorials\Repositories\FlowerRepository;
use App\Components\Memorials\Http\Requests\MemorialFlowerFormRequest;
use App\Components\Memorials\Repositories\MemorialFlowerRepository;
use App\Components\Memorials\Repositories\MemorialRepository;
use App\Http\Controllers\Controller;

class MemorialFlowerController extends Controller
{
    /**
     * The guestbook memorial
     * @var memorialRepository
     */
    protected $memorial;
    protected $memorial_flower;
    protected $flower;

    /**
     * Display a listing of the resource.
     *
     * @param GuestbookRepository $guestbook
     */
    public function __construct(MemorialRepository $memorial, MemorialFlowerRepository $memorialFlowerRepository, FlowerRepository $flowerRepository)
    {
        parent::__construct();
        $this->memorial = $memorial;
        $this->flower = $flowerRepository;
        $this->memorial_flower = $memorialFlowerRepository;
    }

    public function index($slug, $mid)
    {
        $memorial = $this->memorial->getElementById($mid);
        $flowers = $this->flower->all();
        return view('Memorials::' . $this->link_type . '.' . $this->current_theme . '.flowers.index', compact('memorial', 'flowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($slug, $mid, $sid)
    {
        $memorial = $this->memorial->getElementById($mid);
        $flower = $this->flower->getElementById($sid);
        return view('Memorials::' . $this->link_type . '.' . $this->current_theme . '.flowers.create', compact('memorial', 'flower'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($slug, $mid, $sid, MemorialFlowerFormRequest $request)
    {
        $attr = $request->all();
        $this->memorial_flower->create($attr);
        return redirect(route('memorial.show',[$slug, $mid]))->with('success_message', 'Please wait us check it and call you soon!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($mem_id, $id)
    {
        $memorial = $this->memorial->getElementById($mem_id);
        $guestbook = $memorial->guestbooks->find($id);
        return view('Memorials::' . $this->link_type . '.' . $this->current_theme . '.guestbooks.create_edit', compact('guestbook', 'memorial'));
    }

}