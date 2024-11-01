<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Team Member Showcase',
  'post_type' => 'rd_team_member',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Team Member Items',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(
	  
	  
        array(
          'id'           => 'layout',
          'type'         => 'image_select',
          'title'        => 'Select Team Layout',
          'options'      => array(
            'layout1'    => plugins_url( 'img/layout1.png' , __FILE__ ),
            //'layout2'    => plugins_url( 'img/layout2.png' , __FILE__ ),
          ),
          'default'      => 'layout1'
        ), 

	//Layout 1 Items Option
		array(
              'id'              => 'team_option',
              'type'            => 'group',
              'title'           => '',
              'button_title'    => 'Add New Team Member',
              'accordion_title' => 'Team Member Item',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
              'fields'          => array(

				array(
				  'id'    => 'imgup_1',
				  'type'  => 'image',
				  'title' => 'Team Member Item',
				  'desc'    => 'Team Member Image Here.',
				  'help'    => 'Upload Your Team Member Image Here',
				),   
				array(
				  'id'    => 'mamber_name', // this is must be unique
				  'type'  => 'text',
				  'title' => 'Enter Member Name',
				  'default' => 'Maxdew',
				),  
				array(
				  'id'    => 'member_label', // this is must be unique
				  'type'  => 'text',
				  'title' => 'Enter Member Label',
				  'default' => 'Programmer',
				),
				array(
				  'id'    => 'desc',
				  'type'  => 'textarea',
				  'title' => 'Enter your description',
				  'default' => 'Member Information Goes Here',
				),
				array(
				  'id'      => 'icon_one',
				  'type'    => 'icon',
				  'title'   => 'First Icon',
				  'default' => 'fa fa-facebook',
				),
				array(
				  'id'    => 'icon_one_link', // this is must be unique
				  'type'  => 'text',
				  'title' => 'First Icon URL',
				  'desc'    => 'Put your first icon url here.',
				  'help'    => 'Put your first icon url here. write url ex: http://google.com',
				  'default' => 'http://facebook.com',
				),	
				array(
				  'id'      => 'icon_one_hover_color',
				  'type'    => 'color_picker',
				  'title'   => 'First Icon Hover Color',
				  'default' => '#5d4bf2',
				),
				
				array(
				  'id'      => 'icon_two',
				  'type'    => 'icon',
				  'title'   => 'second Icon',
				  'default' => 'fa fa-twitter',
				),
				array(
				  'id'    => 'icon_two_link', // this is must be unique
				  'type'  => 'text',
				  'title' => 'Second Icon URL',
				  'desc'    => 'Put your Second icon url here.',
				  'help'    => 'Put your Second icon url here. write url ex: http://google.com',
				  'default' => 'http://twitter.com',
				),
				array(
				  'id'      => 'icon_two_hover_color',
				  'type'    => 'color_picker',
				  'title'   => 'Second Icon Hover Color',
				  'default' => '#00b9ff',
				),
				array(
				  'id'      => 'icon_three',
				  'type'    => 'icon',
				  'title'   => 'Third Icon',
				  'default' => 'fa fa-linkedin',
				),
				array(
				  'id'    => 'icon_three_link', // this is must be unique
				  'type'  => 'text',
				  'title' => 'Third Icon URL',
				  'desc'    => 'Put your Third icon url here.',
				  'help'    => 'Put your Third icon url here. write url ex: http://google.com',
				  'default' => 'http://linkedin.com',
				),	
				array(
				  'id'      => 'icon_three_hover_color',
				  'type'    => 'color_picker',
				  'title'   => 'Third Icon Hover Color',
				  'default' => '#1e73be',
				),
				array(
				  'id'      => 'icon_four',
				  'type'    => 'icon',
				  'title'   => 'Fourth Icon',
				  'default' => 'fa fa-youtube',
				),
				array(
				  'id'    => 'icon_four_link', // this is must be unique
				  'type'  => 'text',
				  'title' => 'Fourth Icon URL',
				  'desc'    => 'Put your Fourth icon url here.',
				  'help'    => 'Put your Fourth icon url here. write url ex: http://google.com',
				  'default' => 'http://youtube.com',
				),
				array(
				  'id'      => 'icon_four_hover_color',
				  'type'    => 'color_picker',
				  'title'   => 'Fourth Icon Hover Color',
				  'default' => '#dd3333',
				),				
								
              ),           
              
		),
            array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => '<h3 align="center">To get all features working, please buy the pro version here <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Team Member Showcase Pro</a> for only $12</h3>',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),	
			
        // Latout 1 Setting field
                 
            array(
              'id'       => 'layout_one_style',
              'type'     => 'select',
              'title'    => 'Select Style',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
              'options'  => array(
                'style1'  => 'Style 1',
                'style2'   => 'Style 2',
                'style3' => 'Style 3',
                'style4' => 'Style 4 (pro Only)',
                'style5' => 'Style 5 (pro Only)',
                'style6' => 'Style 6 (pro Only)',
                'style7' => 'Style 7 (pro Only)',
                'style8' => 'Style 8 (pro Only)',
                'style9' => 'Style 9 (pro Only)',
                'style10' => 'Style 10 (pro Only)',
                'style11' => 'Style 11 (pro Only)',
                'style12' => 'Style 12 (pro Only)',
              ), 
              'desc'    => 'To View All Style DEMO Here: <a target="_blank" href="http://demo.codecans.com/plugins?theme=team-member-showcase">All Style DEMO</a>',
              'default'  => 'style1',
            ),
            array(
              'id'      => 'gap_items',
              'type'    => 'number',
              'title'   => 'Gap Between Team Member Items',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 0px',
              'default'  => '0',
              'dependency'   => array( 'layout_one_style', 'any', 'style1,style2,style3,style4,style5,style6,style7,style8,style9,style10,style11,style12' ),
            ),
	
			array(
			  'id'      => 'team_align',
			  'type'    => 'radio',
			  'title'   => 'Team Member Align',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
			  'options' => array(
				'left'   => 'Left',
				'center'    => 'Center',
				'right'    => 'Right',
			  ),
			  'default' => 'left',
			),						
            array(
              'id'      => 'width',
              'type'    => 'number',
              'title'   => 'Item Width (Pro Only - <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 216px',
              'default'  => '216',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
			
            array(
              'id'      => 'height',
              'type'    => 'number',
              'title'   => 'Item height (Pro Only - <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 260px',
              'default'  => '260',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
			
            array(
              'id'      => 'mnfsize',
              'type'    => 'number',
              'title'   => 'Member Name Font Size (Pro Only - <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 24px',
              'default'  => '24',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
			
            array(
              'id'      => 'mlfsize',
              'type'    => 'number',
              'title'   => 'Member Label Font Size (Pro Only - <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 14px',
              'default'  => '14',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
			
            array(
              'id'      => 'mdfsize',
              'type'    => 'number',
              'title'   => 'Member Description Font Size (Pro Only - <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
              'after'   => '<i class="cs-text-muted">(px)</i>',
              'desc'    => 'default value is 12px',
              'default'  => '12',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
			
			
			array(
			  'id'      => 'link_open_new_tab',
			  'type'    => 'switcher',
			  'title'   => 'Open Link In New TAB? (<a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Get Pro</a>)',
			  'desc'    => 'If you want to Open Social Icon Link In New Tab Just Check This Box.',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
			  'default' => false
			),	
		array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => '<h3 align="center">To get all features working, please buy the pro version here <a target="_blank" href="http://codecans.com/items/team-member-showcase-pro/">Team Member Showcase Pro</a> for only $12</h3>',
              'dependency'   => array( 'layout_layout1', '==', 'true' ),
            ),
      ), // end: fields
    ), // end: a section
  ),
);

CSFramework_Metabox::instance( $options );
