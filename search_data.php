<?php

function get_searchPosts(){
	$conn=new SQLite3('db/db_member.sqlite3') or die("Unable to open database!");
	$conn->query("attach database 'db/posts.sqlite3' as posts");
	
	if(ISSET($_GET['search'])){
		$keyword = SQLite3::escapeString($_GET['keyword']);//anti sql-injection

		$query=$conn->query("SELECT * FROM 'posts' INNER JOIN user ON 'posts'.'posts'.'userId' = user.user_id WHERE `postText` LIKE '%$keyword%'") or die("Failed to fetch row!");
		while($fetch=$query->fetchArray()){
			$email = strtolower(trim( $fetch['email'] ));
			echo "<div id='post'>".
			"<img id='post_user_image' src='https://www.gravatar.com/avatar/".md5($email)."?d=mp'>".
			"<div id='post_user'>".$fetch['username'].
			"</div>".

			"<div id='post_text'>".$fetch['postText']."</div>";
			if ($fetch['postImage']) {
				echo "<img id='post_image' src='posts/post_image/id".$fetch['postId'].".jpg' onerror='this.onerror=null' alt=''>";
			}


			// TODO
			// echo "<div id='under-post'>".
			// "<div id='post_like'>".$fetch['postLikes']."</div>".
			// "</div>".

			// " visibility: ".$fetch['postVisibility'].
			echo "</div>";
		}
	}
}
?>