{@
	<!--// 사용자 기본설정 -->
	$mi = $module_info;
	if(!$mi->font_btn) $mi->font_btn = N;
	if(!$mi->select_lst) $mi->select_lst = N;
	if(!$mi->btm_mn) $mi->btm_mn = 'home';
	if(!$mi->rd_ft_nav)  $mi->rd_ft_nav = 'lst_btn';
	if(!$mi->preview)  $mi->preview = 'tx';
	if(!$mi->kakao_key)  $mi->kakao_key = ''; <!--// 카카오 키 -->
	if(!$mi->rd_style) $mi->rd_style = ''; <!--// 본문 제목 스타일 -->
	if(!$mi->rd_board_style) $mi->rd_board_style = ''; <!--// 게시판스타일 제목 디자인 -->
	if(!$mi->show_files) $mi->show_files = '2'; <!--// 첨부파일 위치 -->
	if(!$mi->rd_blog_style) $mi->rd_blog_style = '3'; 
	if(!$mi->rd_tl) $mi->rd_tl = 'center';
	if(!$mi->rd_lst) $mi->rd_lst = ''; <!--// 본문하단 목록 -->
	if(!$mi->rd_blog_itm) $mi->rd_blog_itm = 'view';
	if(!$mi->votes) $mi->votes = 'N';
	if(!$mi->wizard) $mi->wizard = 'N';
	if(!$mi->prev_next) $mi->prev_next = '';
	if(!$mi->rd_blog_itm) $mi->rd_blog_itm = 'view';
	if(!$mi->cmt_this_btn) $mi->cmt_this_btn = '2';
	if(!$mi->cmt_vote) $mi->cmt_vote = 'N'; <!--// 댓글 추천 안보이기  -->
	if(!$mi->cmt_vote_down) $mi->cmt_vote_down = 'N';
	if(!$mi->cmt_wrt_position) $mi->cmt_wrt_position = ''; <!--// 댓글목록 위에 댓글창 -->
	if(!$mi->fdb_nav) $mi->fdb_nav = 'fdb_nav_btm';
	if(!$mi->bubble) $mi->bubble = 'N';
	if(!$mi->m_editor) $mi->m_editor = '3'; <!--// 모바일 에디터 감춤 -->
	if(!$mi->cmt_sticker) $mi->cmt_sticker == "Y"; <!--// 댓글 스티커 -->
	if(!$mi->display_ip_address) $mi->display_ip_address = ''; <!--// 아이피 보이기 Y-->
	$lang->cmd_vote = "좋아요"; <!--// 추천버튼 내용 -->
}
