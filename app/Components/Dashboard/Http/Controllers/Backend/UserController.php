<?php namespace App\Components\Dashboard\Http\Controllers\Backend;

use App\Components\Dashboard\Http\Requests\UserRequest;
use App\Components\MediaManager\Http\Controllers\MediaManagerController;
use App\Http\Controllers\Controller;
use App\Components\Dashboard\Repositories\User\UserRepository;

class UserController extends Controller
{

    /**
     * The User Model
     * @var UserRepository
     */
    protected $user;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct(UserRepository $user)
    {
        parent::__construct();
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();
        return view('Dashboard::' . $this->link_type . '.' . $this->current_theme . '.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Dashboard::' . $this->link_type . '.' . $this->current_theme . '.users.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request, MediaManagerController $media)
    {
        $attr = $request->all();
        $attr['password'] = bcrypt($attr['password']);
        /**
         * Upload avatar
         */
        $attr['avatar'] = $media->upload($request->file('avatar'));

        $this->user->create($attr);
        return redirect(route('backend.user.index'))->with('success_message', 'The account has been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->getElementById($id);
        return view('Dashboard::' . $this->link_type . '.' . $this->current_theme . '.users.create_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, UserRequest $request, MediaManagerController $media)
    {
        $attr = $request->all();
        $attr['password'] = bcrypt($attr['password']);
        $user = $this->user->getElementById($id);
        /**
         * Update Avatar
         */
        if( $request->hasFile('avatar') ) {
            if(file_exists($user->avatar)) {
                unlink($user->image);
            }
            $attr['avatar'] = $media->upload($request->file('avatar'));
        }

        $user->update($attr);
        return redirect(route('backend.user.index'))->with('success_message', 'The account has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->user->getElementById($id)->delete();
        return redirect()->back()->with('success_message', 'The account has been deleted');
    }
}