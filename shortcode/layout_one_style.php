	<?php
	if($layout_one_style == "style1"){
		$output .= '
				<style type="text/css">
					.rd_team .rd_item_square .social-icons li:nth-child(1):hover a {
						color: '.$group['icon_one_hover_color'].';
					}
					.rd_team .rd_item_square .social-icons li:nth-child(2):hover a {
						color: '.$group['icon_two_hover_color'].';
					}
					.rd_team .rd_item_square .social-icons li:nth-child(3):hover a {
						color: '.$group['icon_three_hover_color'].';
					}
					.rd_team .rd_item_square .social-icons li:nth-child(4):hover a {
						color: '.$group['icon_four_hover_color'].';
					}

					.rd_team .rd_item_square {
					width: 216px;
					}
					.rd_team .rd_item_square .face {
						height: 260px; 
					}
				</style>
				
					<div class="rd_item_square">
                        <div class="rd_face_container">
                            <div class="face"><img alt="" src="'.$image[0].'">
                            </div>
                        </div>
                        <div class="rd_single_item-content">
                            <div class="title">
                                <h3>'.$group['member_label'].'</h3>
                                <h4>'.$group['mamber_name'].'</h4>
                            </div>
                            <div class="text">
                                <p>'.$group['desc'].'</p>
                            </div>
                            <div class="footer">
                                <ul class="social-icons">
                                    <li><a target="" href="'.$group['icon_one_link'].'"><i class="ic-padd fa '.$group['icon_one'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_two_link'].'"><i class="ic-padd fa '.$group['icon_two'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_three_link'].'"><i class="ic-padd fa '.$group['icon_three'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_four_link'].'"><i class="ic-padd fa '.$group['icon_four'].'"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
				';
				}

	
	if ($layout_one_style == "style2") {
		
		$output .= '
				<style type="text/css">
					.rd_team .rd_item_square-2 .social-icons li:nth-child(1):hover a {
						color: '.$group['icon_one_hover_color'].';
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(2):hover a {
						color: '.$group['icon_two_hover_color'].';
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(3):hover a {
						color: '.$group['icon_three_hover_color'].';
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(4):hover a {
						color: '.$group['icon_four_hover_color'].';
					}
					.rd_team .rd_item_square-2 {
					width: 216px;
					}
					.rd_team .rd_item_square-2 .face {
						height: 260px; 
					}
				</style>
                    <div class="rd_item_square-2">
                        <div class="title">
                            <h3>'.$group['mamber_name'].'</h3>
                        </div>
						<div class="rd_face_container">
                            <div class="face"><img alt="" src="'.$image[0].'">
                            </div>
                        </div>
                        <div class="rd_single_item-content">
                            <div class="footer">
									<h4 id="stl2_mlabel">'.$group['member_label'].'</h4>
									<div id="stl2_text">
										<p>'.$group['desc'].'</p>
									</div>
                                
								<ul class="social-icons">
                                    <li><a target="" href="'.$group['icon_one_link'].'"><i class="ic-padd fa '.$group['icon_one'].' "></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_two_link'].'"><i class="ic-padd fa '.$group['icon_two'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_three_link'].'"><i class="ic-padd fa '.$group['icon_three'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_four_link'].'"><i class="ic-padd fa '.$group['icon_four'].'"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        </div>
				';
		}
		if ($layout_one_style == "style3") {
		
		$output .= '
				<style type="text/css">
					.rd_team .rd_item_square-3 .social-icons li:nth-child(1):hover a {
						color: '.$group['icon_one_hover_color'].';
					}
					.rd_team .rd_item_square-3 .social-icons li:nth-child(2):hover a {
						color: '.$group['icon_two_hover_color'].';
					}
					.rd_team .rd_item_square-3 .social-icons li:nth-child(3):hover a {
						color: '.$group['icon_three_hover_color'].';
					}
					.rd_team .rd_item_square-3 .social-icons li:nth-child(4):hover a {
						color: '.$group['icon_four_hover_color'].';
					}

					.rd_team .rd_item_square-3 {
					width: 216px;
					}
					.rd_team .rd_item_square-3 .face {
						height: 260px; 
					}
				</style>
                    <div class="rd_item_square-3">
                        <div class="rd_face_container">
                            <div class="face"><img alt="" src="'.$image[0].'">
                            </div>
                            <ul class="social-icons">
                                    <li><a target="" href="'.$group['icon_one_link'].'"><i class="ic-padd fa '.$group['icon_one'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_two_link'].'"><i class="ic-padd fa '.$group['icon_two'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_three_link'].'"><i class="ic-padd fa '.$group['icon_three'].'"></i></a>
                                    </li>
                                    <li><a target="" href="'.$group['icon_four_link'].'"><i class="ic-padd fa '.$group['icon_four'].'"></i></a>
                                    </li>
                            </ul>
                        </div>
                        <div class="rd_single_item-content">
                            <h4>'.$group['mamber_name'].'</h4>
                            <h3>'.$group['member_label'].'</h3>
                            <div class="text">
                                <p>'.$group['desc'].'</p>
                            </div>
                        </div>
			</div>
				';
		}
		
		if ($layout_one_style == "style4") {
		
		$output .= '<h3 align="center">Team Style 4 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
		}
		if ($layout_one_style == "style5") {
		
		$output .= '<h3 align="center">Team Style 5 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
		}
		
		if($layout_one_style == "style6"){
		$output .= '<h3 align="center">Team Style 6 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}		
		if($layout_one_style == "style7"){
		$output .= '<h3 align="center">Team Style 7 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}
	if($layout_one_style == "style8"){
		$output .= '<h3 align="center">Team Style 8 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}
				if($layout_one_style == "style9"){
		$output .= '<h3 align="center">Team Style 9 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}
	if($layout_one_style == "style10"){
		$output .= '<h3 align="center">Team Style 10 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}	
				if($layout_one_style == "style11"){
		$output .= '<h3 align="center">Team Style 11 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}	
				if($layout_one_style == "style12"){
		$output .= '<h3 align="center">Team Style 12 Only for pro version user. Please Buy Pro Version <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/"><span style="color:blue;">Get Pro Version</span></a> for only $12</h3>';
				}
