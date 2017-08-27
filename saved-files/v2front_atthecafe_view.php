$view = new view();
$view->name = 'v2front_atthecafe_view';
$view->description = 'Display a list of NYSEC Cafe at Ethical Meetings';
$view->tag = 'cafe meetings';
$view->base_table = 'node';
$view->human_name = 'v2front_atTheCafe_view';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Defaults */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->display->display_options['title'] = 'Sunday Meetings';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'none';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['exposed_block'] = TRUE;
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
/* Field: Content: Date */
$handler->display->display_options['fields']['field_date_nysec']['id'] = 'field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['table'] = 'field_data_field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['field'] = 'field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_date_nysec']['settings'] = array(
  'format_type' => 'short',
  'fromto' => 'value',
  'multiple_number' => '',
  'multiple_from' => '',
  'multiple_to' => '',
  'show_repeat_rule' => 'show',
);
/* Sort criterion: Content: Date -  start date (field_date_nysec) */
$handler->display->display_options['sorts']['field_date_nysec_value']['id'] = 'field_date_nysec_value';
$handler->display->display_options['sorts']['field_date_nysec_value']['table'] = 'field_data_field_date_nysec';
$handler->display->display_options['sorts']['field_date_nysec_value']['field'] = 'field_date_nysec_value';
/* Sort criterion: Content: Updated date */
$handler->display->display_options['sorts']['changed']['id'] = 'changed';
$handler->display->display_options['sorts']['changed']['table'] = 'node';
$handler->display->display_options['sorts']['changed']['field'] = 'changed';
$handler->display->display_options['sorts']['changed']['order'] = 'DESC';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Date -  start date (field_date_nysec) */
$handler->display->display_options['filters']['field_date_nysec_value']['id'] = 'field_date_nysec_value';
$handler->display->display_options['filters']['field_date_nysec_value']['table'] = 'field_data_field_date_nysec';
$handler->display->display_options['filters']['field_date_nysec_value']['field'] = 'field_date_nysec_value';
$handler->display->display_options['filters']['field_date_nysec_value']['operator'] = '>=';
$handler->display->display_options['filters']['field_date_nysec_value']['group'] = 1;
$handler->display->display_options['filters']['field_date_nysec_value']['default_date'] = 'now';
/* Filter criterion: Content: v2front Category (field_v2front_category) */
$handler->display->display_options['filters']['field_v2front_category_tid']['id'] = 'field_v2front_category_tid';
$handler->display->display_options['filters']['field_v2front_category_tid']['table'] = 'field_data_field_v2front_category';
$handler->display->display_options['filters']['field_v2front_category_tid']['field'] = 'field_v2front_category_tid';
$handler->display->display_options['filters']['field_v2front_category_tid']['value'] = array(
  47 => '47',
);
$handler->display->display_options['filters']['field_v2front_category_tid']['group'] = 1;
$handler->display->display_options['filters']['field_v2front_category_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_v2front_category_tid']['vocabulary'] = 'v2front_category';
$handler->display->display_options['filters']['field_v2front_category_tid']['hierarchy'] = 1;

/* Display: v2front_pane */
$handler = $view->new_display('panel_pane', 'v2front_pane', 'panel_pane_2');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'At the Cafe';
$handler->display->display_options['defaults']['css_class'] = FALSE;
$handler->display->display_options['defaults']['pager'] = FALSE;
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '3';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['inline'] = array(
  'field_date_nysec' => 'field_date_nysec',
  'title' => 'title',
);
$handler->display->display_options['row_options']['separator'] = ': ';
$handler->display->display_options['row_options']['hide_empty'] = TRUE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['header'] = FALSE;
$handler->display->display_options['defaults']['footer'] = FALSE;
/* Footer: Global: Text area */
$handler->display->display_options['footer']['area']['id'] = 'area';
$handler->display->display_options['footer']['area']['table'] = 'views';
$handler->display->display_options['footer']['area']['field'] = 'area';
$handler->display->display_options['footer']['area']['empty'] = TRUE;
$handler->display->display_options['footer']['area']['content'] = '<div class="v2front-event-calendarLinks"><a href="calendar-date_nysec">See Calendar</a></div>';
$handler->display->display_options['footer']['area']['format'] = '2';
$handler->display->display_options['defaults']['empty'] = FALSE;
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = 'No content.
';
$handler->display->display_options['empty']['area']['format'] = '2';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Date */
$handler->display->display_options['fields']['field_date_nysec']['id'] = 'field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['table'] = 'field_data_field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['field'] = 'field_date_nysec';
$handler->display->display_options['fields']['field_date_nysec']['label'] = '';
$handler->display->display_options['fields']['field_date_nysec']['element_class'] = 'v2front-event-titles';
$handler->display->display_options['fields']['field_date_nysec']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_date_nysec']['settings'] = array(
  'format_type' => 'short',
  'fromto' => 'value',
  'multiple_number' => '',
  'multiple_from' => '',
  'multiple_to' => '',
  'show_remaining_days' => 0,
  'show_repeat_rule' => 'show',
);
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['element_class'] = 'v2front-event-titles';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Field: Content: Location */
$handler->display->display_options['fields']['field_location']['id'] = 'field_location';
$handler->display->display_options['fields']['field_location']['table'] = 'field_data_field_location';
$handler->display->display_options['fields']['field_location']['field'] = 'field_location';
$handler->display->display_options['fields']['field_location']['label'] = '';
$handler->display->display_options['fields']['field_location']['element_label_colon'] = FALSE;
/* Field: Content: Featured Image */
$handler->display->display_options['fields']['field_featured_image']['id'] = 'field_featured_image';
$handler->display->display_options['fields']['field_featured_image']['table'] = 'field_data_field_featured_image';
$handler->display->display_options['fields']['field_featured_image']['field'] = 'field_featured_image';
$handler->display->display_options['fields']['field_featured_image']['label'] = '';
$handler->display->display_options['fields']['field_featured_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_featured_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_featured_image']['settings'] = array(
  'image_style' => 'scale_crop__120_100',
  'image_link' => '',
);
/* Field: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['label'] = '';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '<br/><hr/>';
$handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
$translatables['v2front_atthecafe_view'] = array(
  t('Defaults'),
  t('Sunday Meetings'),
  t('more'),
  t('Apply'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('Title'),
  t('Date'),
  t('v2front_pane'),
  t('At the Cafe'),
  t('<div class="v2front-event-calendarLinks"><a href="calendar-date_nysec">See Calendar</a></div>'),
  t('No content.
'),
  t('<br/><hr/>'),
  t('View panes'),
);
