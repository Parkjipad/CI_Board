
	<?
	$return_array=NULL;
	foreach($list as $result){   //$list는 Select문의 결과값. 즉, 테이블에 뿌려줄 값.
		$return_array .= "<tr><td>".$result['date']."</td><td><a href = /index.php/Board/content/".$result['no'].">".$result['title']."</a></td><td>".$result['id']."</td><td>".$result['look']."</td></tr>";
	}

	?>
	


				<div class="row">
					<table class="table col-md-9">
						<th>날짜</th><th>제목</th><th>아이디</th><th>조회수</th>
						<?=$return_array?>
					</table>
				</div>
			</div>



