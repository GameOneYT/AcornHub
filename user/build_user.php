<?php 
// * Connects to db
function db_connect(){
    $conn = new SQLite3($_SERVER["DOCUMENT_ROOT"].'/acornhub/db/db_member.sqlite3');
    return $conn;
}

if(isset($_GET["upi"])){ //upi - UserPageID
    $upi = SQLite3::escapeString($_GET["upi"]);//anti sql injection
    $conn = db_connect();
    $query = $conn->query("SELECT COUNT(*) AS count FROM 'user' WHERE UPI LIKE '$upi'");
    $row = $query->fetchArray();

}


function get_profileImg(){
    if(isset($GLOBALS['upi'])){
        $upi = $GLOBALS['upi'];
        $conn = db_connect();
        $query=$conn->query("SELECT email FROM user WHERE UPI LIKE '$upi' LIMIT 1");
        $fetch=$query->fetchArray();
        $email = strtolower(trim( $fetch['email'] ));
        return "<img id='user_img' src='https://www.gravatar.com/avatar/".md5($email)."?d=mp'>";
    }
}

function get_profileUsername(){
    if(isset($GLOBALS['upi'])){
        $upi = $GLOBALS['upi'];
        $conn = db_connect();
        $query=$conn->query("SELECT username FROM user WHERE UPI LIKE '$upi' LIMIT 1");
        $fetch=$query->fetchArray();
        return $fetch['username'];
    }
}

function get_profileDescription(){
    if(isset($GLOBALS['upi'])){
        $upi = $GLOBALS['upi'];
        $conn = db_connect();
        $query=$conn->query("SELECT user_profile.description FROM user_profile INNER JOIN user ON user_profile.user_id = user.user_id WHERE UPI LIKE '$upi' LIMIT 1");
        $fetch=$query->fetchArray();
        return $fetch['description'];
    }
}



function get_profileBadges(){
    if(isset($GLOBALS['upi'])){
        $upi = $GLOBALS['upi'];
        $conn = db_connect();
        $query=$conn->query("SELECT badges FROM user_profile INNER JOIN user ON user_profile.user_id = user.user_id WHERE UPI LIKE '$upi' LIMIT 1");
        $fetch=$query->fetchArray();
        return $fetch['badges'];
    }
}

// TODO{
function get_profilePosts(){
    if(isset($GLOBALS['upi'])){
        $upi = $GLOBALS['upi'];
        $conn = db_connect();
	    $conn->query("attach database '".$_SERVER['DOCUMENT_ROOT'].'/acornhub/db/posts.sqlite3'."' as posts");
        $query=$conn->query("SELECT * FROM posts.posts INNER JOIN user ON user.user_id = posts.userId WHERE UPI LIKE '$upi'");
        // $fetch=$query->fetchArray();
        // return $fetch['posts'];
        while($fetch=$query->fetchArray()){
			$email = strtolower(trim( $fetch['email'] ));
			print "<div id='post'>".
			"<img id='post_user_image' src='https://www.gravatar.com/avatar/".md5($email)."?d=mp'>".
			"<div id='post_user'>".$fetch['username'].
			"</div>".

			"<div id='post_text'>".$fetch['postText']."</div>";
			if ($fetch['postImage']) {
				print "<img id='post_image' src='posts/post_image/id".$fetch['postId'].".jpg' onerror='this.onerror=null' alt=''>";
			}


			// TODO
			// echo "<div id='under-post'>".
			// "<div id='post_like'>".$fetch['postLikes']."</div>".
			// "</div>".

			// " visibility: ".$fetch['postVisibility'].
			print "</div>";
		}
    }
}
//}

?>