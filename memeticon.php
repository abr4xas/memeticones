<?php
/**
 * Memesticon
 * Script para mostrar emoticonos con memes.
 * @author abr4xas
 **/


function smilies($p) {
			$p = str_replace(":D","<img src=\"icons/cute_smile.gif\">",$p);
			$p = str_replace(":alone:","<img src=\"icons/4ever_alone.gif\">",$p);
			$p = str_replace(":cerealg:","<img src=\"icons/cereal_guy.gif\">",$p);
			$p = str_replace(":cc:","<img src=\"icons/challenge_accepted.gif\">",$p);
			$p = str_replace(":yao:","<img src=\"icons/fuck_that.gif\">",$p);
			$p = str_replace(":fyea:","<img src=\"icons/fuck_yea.gif\">",$p);
			$p = str_replace(":fuuu:","<img src=\"icons/fuuu.gif\">",$p);
			$p = str_replace(":lied:","<img src=\"icons/i_lied.gif\">",$p);
			$p = str_replace(":ayfkm:","<img src=\"icons/kidding_me.gif\">",$p);
			$p = str_replace(":laboss:","<img src=\"icons/like_a_boss.gif\">",$p);
			$p = str_replace(":lol:","<img src=\"icons/lol_guy.gif\">",$p);
			$p = str_replace(":like:","<img src=\"icons/like_guy.gif\">",$p);
			$p = str_replace(":mog:","<img src=\"icons/mother_of_god.gif\">",$p);
			$p = str_replace(":okay:","<img src=\"icons/ok_guy.gif\">",$p);
			$p = str_replace(":pfff:","<img src=\"icons/pffft_guy.gif\">",$p);
			$p = str_replace(":pokerface:","<img src=\"icons/poker_face.gif\">",$p);
			$p = str_replace(":puke:","<img src=\"icons/rainbow_vomit.gif\">",$p);
			$p = str_replace(":troll:","<img src=\"icons/troll_face.gif\">",$p);
			$p = str_replace(":yraight:","<img src=\"icons/yea_right.gif\">",$p);
			$p = str_replace(":yuno:","<img src=\"icons/yuno.gif\">",$p);
		return $p;
}


?>