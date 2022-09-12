

```sql
SELECT tj.job_id, tj.editor, t.language_code FROM wp_icl_translate_job tj
JOIN wp_icl_translation_status ts ON tj.rid = ts.rid
JOIN wp_icl_translations t ON ts.translation_id = t.translation_id
WHERE t.trid = 22026
ORDER BY tj.job_id DESC
```
require('wp-blog-header.php'), require_once('wp-includes/template-loader.php'), include('/plugins/elementor/modules/page-templates/templates/header-footer.php'), get_header, locate_template, load_template, require_once('/themes/hello-elementor/header.php'), elementor_theme_do_location, ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager->do_location, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->get_content, Elementor\Core\Base\Document->get_content, Elementor\Frontend->get_builder_content, do_action('elementor/frontend/before_get_builder_content'), WP_Hook->do_action, WP_Hook->apply_filters, Elementor\Modules\AdminBar\Module->add_document_to_admin_bar, Elementor\Core\Base\Document->is_editable_by_current_user, Elementor\User::is_current_user_can_edit, current_user_can, user_can, WP_User->has_cap, apply_filters('user_has_cap'), WP_Hook->apply_filters, WPML\LIB\WP\Hooks::WPML\LIB\WP\{closure}, WPML\FP\Promise->resolve, WPML\FP\Right->chain, WPML\FP\Right->map, WPML\FP\{closure}, WPML\TM\ATE\Review\ReviewTranslation->WPML\TM\ATE\Review\{closure}, WPML\TM\API\Jobs::__callStatic, call_user_func_array, WPML\TM\API\Jobs::WPML\FP\{closure}, call_user_func_array, WPML\TM\API\Jobs::WPML\TM\API\{closure}, WPML\TM\API\Jobs::__callStatic, call_user_func_array, WPML\TM\API\Jobs::WPML\FP\{closure}, call_user_func_array, WPML\TM\API\Jobs::WPML\TM\API\{closure}, WPML\TM\API\Jobs::__callStatic, call_user_func_array, WPML\TM\API\Jobs::WPML\FP\{closure}, call_user_func_array, WPML\TM\API\Jobs::WPML\TM\API\{closure}, TranslationManagement->get_translation_job_id, TranslationManagement->get_translation_job_info#298 

(36.7 ms)

--- 

```sql
SELECT wp_posts.*
FROM wp_posts
WHERE 1=1 AND wp_posts.post_type = 'elementor_library' AND ((wp_posts.post_status = 'publish'))
ORDER BY wp_posts.post_date DESC
LIMIT 0, 999
```
require('wp-blog-header.php'), require_once('wp-includes/template-loader.php'), include('/plugins/elementor/modules/page-templates/templates/header-footer.php'), get_header, locate_template, load_template, require_once('/themes/hello-elementor/header.php'), elementor_theme_do_location, ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager->do_location, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->get_content, Elementor\Core\Base\Document->get_content, Elementor\Frontend->get_builder_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_elements_with_wrapper, Elementor\Core\Base\Document->print_elements, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, do_action('elementor/frontend/widget/before_render'), WP_Hook->do_action, WP_Hook->apply_filters, OoohBoi_Tabbr::should_script_enqueue, Elementor\Controls_Stack->get_settings_for_display, Elementor\Controls_Stack->get_parsed_dynamic_settings, Elementor\Core\Base\Base_Object->get_settings, Elementor\Core\Base\Base_Object->ensure_settings, Elementor\Controls_Stack->get_init_settings, Elementor\Controls_Stack->get_data, Elementor\Controls_Stack->sanitize_settings, Elementor\Controls_Stack->get_controls, Elementor\Widget_Base->get_stack, Elementor\Controls_Stack->get_stack, Elementor\Controls_Stack->init_controls, PremiumAddons\Widgets\Premium_Nav_Menu->register_controls, PremiumAddons\Widgets\Premium_Nav_Menu->get_menu_settings_controls, PremiumAddons\Includes\Premium_Template_Tags->get_elementor_page_list, get_posts, WP_Query->query, WP_Query->get_posts#316 

(4.1 ms)

---

```sql
select * from wp_posts where post_type in ('elementor_library','jet-engine') and post_status='publish'
```
require('wp-blog-header.php'), require_once('wp-includes/template-loader.php'), include('/plugins/elementor/modules/page-templates/templates/header-footer.php'), get_header, locate_template, load_template, require_once('/themes/hello-elementor/header.php'), elementor_theme_do_location, ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager->do_location, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->get_content, Elementor\Core\Base\Document->get_content, Elementor\Frontend->get_builder_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_elements_with_wrapper, Elementor\Core\Base\Document->print_elements, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, Elementor\Widget_Base->print_content, Elementor\Widget_Base->render_content, Elementor\Controls_Stack->render_by_mode, PremiumAddons\Widgets\Premium_Nav_Menu->render, wp_nav_menu, walk_nav_menu_tree, Walker->walk, Walker->display_element, PremiumAddons\Includes\Pa_Nav_Menu_Walker->end_el, PremiumAddons\Includes\Premium_Template_Tags->get_template_content, Elementor\Frontend->get_builder_content_for_display, Elementor\Frontend->get_builder_content, Elementor\Core\Files\CSS\Base->print_css, Elementor\Core\Files\Base->get_content, Elementor\Core\Files\CSS\Base->parse_content, Elementor\Core\Files\CSS\Post->render_css, Elementor\Core\Files\CSS\Post->render_styles, Elementor\Core\Files\CSS\Post->add_controls_stack_style_rules, Elementor\Core\Files\CSS\Post->render_styles, Elementor\Core\Files\CSS\Post->add_controls_stack_style_rules, Elementor\Core\Files\CSS\Post->render_styles, Elementor\Core\Base\Base_Object->get_settings, Elementor\Core\Base\Base_Object->ensure_settings, Elementor\Controls_Stack->get_init_settings, Elementor\Controls_Stack->get_data, Elementor\Controls_Stack->sanitize_settings, Elementor\Controls_Stack->get_controls, Elementor\Widget_Base->get_stack, Elementor\Controls_Stack->get_stack, Elementor\Controls_Stack->init_controls, UniteCreatorElementorWidget->register_controls, UniteCreatorElementorWidget->ucRegisterControls_addon, UniteCreatorElementorWidget->addItemsControlsUC, HelperProviderCoreUC_EL::getArrElementorTemplatesShort, UniteCreatorDB->fetchSql, UniteProviderDBUC->fetchSql#337

(3.7 ms)

---

```sql
SELECT DISTINCT context COLLATE utf8mb4_bin
FROM wp_icl_strings
```

require('wp-blog-header.php'), require_once('wp-load.php'), require_once('wp-config.php'), require_once('wp-settings.php'), do_action('plugins_loaded'), WP_Hook->do_action, WP_Hook->apply_filters, WPML_ST_Initialize->run, WPML_ST_Initialize->loadEarlyHooks, WPML\ST\TranslationFile\Hooks->install, WPML_Action_Filter_Loader->load, WPML_Action_Filter_Loader->load_factory_or_action, WPML_Action_Filter_Loader->load_factory, WPML_Action_Filter_Loader->run_factory, WPML\ST\MO\Hooks\CustomTextDomains->add_hooks, WPML\ST\TranslationFile\Domains->getCustomMODomains, WPML\ST\TranslationFile\Domains->getMODomains#26

(15.5 ms)

---

```sql
SELECT post_id, meta_key, meta_value FROM wp_postmeta WHERE post_id IN (42172,42171,42170,42169,42168,42167,41940,41939,41938,41937,41936,41935,41463,41462,41461,41460,41459,41458,40463,40459,40446,39327,39323,39266,39264,37269,37266,37263,32509,32507,32505) ORDER BY meta_id ASC
```

require('wp-blog-header.php'), require_once('wp-includes/template-loader.php'), include('/plugins/elementor/modules/page-templates/templates/header-footer.php'), get_header, locate_template, load_template, require_once('/themes/hello-elementor/header.php'), elementor_theme_do_location, ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager->do_location, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->get_content, Elementor\Core\Base\Document->get_content, Elementor\Frontend->get_builder_content, ElementorPro\Modules\ThemeBuilder\Documents\Theme_Document->print_elements_with_wrapper, Elementor\Core\Base\Document->print_elements, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, Elementor\Element_Base->print_content, Elementor\Element_Base->print_element, do_action('elementor/frontend/widget/before_render'), WP_Hook->do_action, WP_Hook->apply_filters, OoohBoi_Tabbr::should_script_enqueue, Elementor\Controls_Stack->get_settings_for_display, Elementor\Controls_Stack->get_parsed_dynamic_settings, Elementor\Core\Base\Base_Object->get_settings, Elementor\Core\Base\Base_Object->ensure_settings, Elementor\Controls_Stack->get_init_settings, Elementor\Controls_Stack->get_data, Elementor\Controls_Stack->sanitize_settings, Elementor\Controls_Stack->get_controls, Elementor\Widget_Base->get_stack, Elementor\Controls_Stack->get_stack, Elementor\Controls_Stack->init_controls, PremiumAddons\Widgets\Premium_Nav_Menu->register_controls, PremiumAddons\Widgets\Premium_Nav_Menu->get_menu_settings_controls, PremiumAddons\Includes\Premium_Template_Tags->get_elementor_page_list, get_posts, WP_Query->query, WP_Query->get_posts, update_post_caches, update_postmeta_cache, update_meta_cache

(89,4 ms)
