/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.width = "600"; //文本域宽度
    config.height = "100";//文本域高度
	config.toolbar =
    [    
        ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],    
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'],    
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],    
        ['Link', 'Unlink', 'Anchor'],    
        ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],   
        '/',    
        ['Styles', 'Format', 'Font', 'FontSize'],    
        ['TextColor', 'BGColor'],    
        ['Maximize', 'ShowBlocks', '-', 'Source', '-', 'Undo', 'Redo']
    ];
	//config.language='zh-cn';
	config.font_names='宋体/宋体;黑体/黑体;楷体/楷体;'+config.font_names; 
};
 