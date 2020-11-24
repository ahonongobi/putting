<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostsMember;
use App\Models\Likes;
use Image;
use Illuminate\Support\Facades\Auth;

class SaveMemberActualityController extends Controller
{
    /** chemin vers modiification post */
    function modifyPost($id)
    {
        $data = PostsMember::all()->only($id);
        //$data =  PostsMember::find($id);
        return view('wife-page/wife-update-post', compact('data'));
    }

    function changePost(Request $req,$id){
        request()->validate([
            'access_code' => ['required', 'integer'],
            'description' => ['required', 'string'] ,
        ]);
        
        $notificationMessages = Chat::where('id_destinateur', Auth::user()->id)
                                    ->where('reading','unread')
                                    ->get();

        if($req->access_code != Auth::user()->access_code){
            return redirect('wa-zkl10_va/'.Auth::user()->pseudo)->with('errorCode', 'Code d\'accès incorrect. Évitez de taper un code faux. Modifier à nouveau le poste');
        }else{

            //$post  = new PostsMember();
            $post = PostsMember::find($id);
            $post->description = $req->input('description');
            $post->update(); 
           return back()->with('perfect', 'Poste bien modifié');;
            //return redirect('wpo-upd-zkl10_va/'.Auth::user()->pseudo)->with('perfect', 'Poste bien modifié');
        }
    }
    
    /* Pour selectionner les infos de l'user connecter dans posts_members*/
    function returnInfoPost()
    {
        //whereId_userANDAction_trash($id, 'oui')->last();
        $infosPosts =  PostsMember::all()->where('id_user', Auth::user()->id)
                                        ->where('action_trash', 'non')
                                        ->sortDesc();

        $ifLikes = Likes::all()->where('pseudo', Auth::user()->pseudo);
        return view('wife-page/wife-actuality', compact('infosPosts', 'ifLikes'));
    }
    

    /** pour cacher affichage  */
    function delete($id)
    {
        
        $data =  PostsMember::find($id);
        $data->action_trash = 'oui';
        $data->update();
        return back();
    }

    /**pour inserer dans posts_members */
    function saveDataActuality(Request $req)
    {
        /*return $req->file('picture1')->store('member_actuality');*/
        
        request()->validate([
            'post_photo_path_1' => ['required', 'image'] ,
            'post_photo_path_2' => ['required', 'image'] ,
            'post_photo_path_3' => ['required', 'image'] ,
            'post_photo_path_4' => ['required', 'image'] ,
            'access_code' => ['required', 'integer'],
            'description' => ['required', 'string'] ,
        ]);

        if($req->access_code != Auth::user()->access_code){
            return redirect('wpo-zkl10_va/'.Auth::user()->pseudo)->with('errorCode', 'Code d\'accès incorrect.');
        }else{
            $post  = new PostsMember();
            $post->description = $req->input('description');
            $post->remember_token = "NULL";
            $post->staf = 1;
            $post->id_user = Auth::user()->id;
            $post->pseudo = Auth::user()->pseudo;

            $id = Auth::user()->id;
            $select_id_post = PostsMember::all()->where('id_user', $id)->last();
            if( $select_id_post == NULL ){
                $post->id_post = 1;
            }elseif($select_id_post != NULL){
                $post->id_post = $select_id_post->id_post+1;
            }
            

            if($req->hasFile('post_photo_path_1') AND $req->hasFile('post_photo_path_2') AND $req->hasFile('post_photo_path_3') AND $req->hasFile('post_photo_path_4'))
            {
                $post_photo_path_1 = $req->file('post_photo_path_1');
                $post_photo_path_2 = $req->file('post_photo_path_2');
                $post_photo_path_3 = $req->file('post_photo_path_3');
                $post_photo_path_4 = $req->file('post_photo_path_4');

                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2*time().'.'.$post_photo_path_1->getClientOriginalExtension();
                Image::make($post_photo_path_1)->save(public_path('/storage/actuality_photos/' .$filename1));
                
                $filename2 = 3*time().'.'.$post_photo_path_2->getClientOriginalExtension();
                Image::make($post_photo_path_2)->save(public_path('/storage/actuality_photos/' .$filename2));

                $filename3 = 4*time().'.'.$post_photo_path_3->getClientOriginalExtension();
                Image::make($post_photo_path_3)->save(public_path('/storage/actuality_photos/' .$filename3));

                $filename4 = 5*time().'.'.$post_photo_path_4->getClientOriginalExtension();
                Image::make($post_photo_path_4)->save(public_path('/storage/actuality_photos/' .$filename4));

                $post->post_photo_path_1 = $filename1;
                $post->post_photo_path_2 = $filename2;
                $post->post_photo_path_3 = $filename3;
                $post->post_photo_path_4 = $filename4;
            }

            $post->save();
            
            return redirect('wpo-zkl10_va/'.Auth::user()->pseudo)->with('perfect', 'Poste n°' . $post->id_post . ' bien ajouté');
        }

    }
}
