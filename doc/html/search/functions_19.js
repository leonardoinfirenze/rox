var searchData=
[
  ['whereisclass',['whereIsClass',['../class_class_loader.html#a0f14af05a840106c7daa36cb1ec57a86',1,'ClassLoader']]],
  ['widget',['widget',['../jquery-ui-1_810_83_8custom_8js.html#a40acf44faeb2d1a4fc7e91ac84caecdc',1,'widget(&quot;ui.mouse&quot;,{version:&quot;1.10.3&quot;, options:{cancel:&quot;input,textarea,button,select,option&quot;, distance:1, delay:0}, _mouseInit:function(){var that=this;this.element.bind(&quot;mousedown.&quot;+this.widgetName, function(event){return that._mouseDown(event);}).bind(&quot;click.&quot;+this.widgetName, function(event){if(true===$.data(event.target, that.widgetName+&quot;.preventClickEvent&quot;)){$.removeData(event.target, that.widgetName+&quot;.preventClickEvent&quot;);event.stopImmediatePropagation();return false;}});this.started=false;}, _mouseDestroy:function(){this.element.unbind(&quot;.&quot;+this.widgetName);if(this._mouseMoveDelegate){$(document).unbind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).unbind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate);}}, _mouseDown:function(event){if(mouseHandled){return;}(this._mouseStarted &amp;&amp;this._mouseUp(event));this._mouseDownEvent=event;var that=this, btnIsLeft=(event.which===1), elIsCancel=(typeof this.options.cancel===&quot;string&quot;&amp;&amp;event.target.nodeName?$(event.target).closest(this.options.cancel).length:false);if(!btnIsLeft||elIsCancel||!this._mouseCapture(event)){return true;}this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){that.mouseDelayMet=true;}, this.options.delay);}if(this._mouseDistanceMet(event)&amp;&amp;this._mouseDelayMet(event)){this._mouseStarted=(this._mouseStart(event)!==false);if(!this._mouseStarted){event.preventDefault();return true;}}if(true===$.data(event.target, this.widgetName+&quot;.preventClickEvent&quot;)){$.removeData(event.target, this.widgetName+&quot;.preventClickEvent&quot;);}this._mouseMoveDelegate=function(event){return that._mouseMove(event);};this._mouseUpDelegate=function(event){return that._mouseUp(event);};$(document).bind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).bind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate);event.preventDefault();mouseHandled=true;return true;}, _mouseMove:function(event){if($.ui.ie &amp;&amp;(!document.documentMode||document.documentMode&lt; 9)&amp;&amp;!event.button){return this._mouseUp(event);}if(this._mouseStarted){this._mouseDrag(event);return event.preventDefault();}if(this._mouseDistanceMet(event)&amp;&amp;this._mouseDelayMet(event)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent, event)!==false);(this._mouseStarted?this._mouseDrag(event):this._mouseUp(event));}return!this._mouseStarted;}, _mouseUp:function(event){$(document).unbind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).unbind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;if(event.target===this._mouseDownEvent.target){$.data(event.target, this.widgetName+&quot;.preventClickEvent&quot;, true);}this._mouseStop(event);}return false;}, _mouseDistanceMet:function(event){return(Math.max(Math.abs(this._mouseDownEvent.pageX-event.pageX), Math.abs(this._mouseDownEvent.pageY-event.pageY)) &gt;=this.options.distance);}, _mouseDelayMet:function(){return this.mouseDelayMet;}, _mouseStart:function(){}, _mouseDrag:function(){}, _mouseStop:function(){}, _mouseCapture:function(){return true;}}):&#160;jquery-ui-1.10.3.custom.js'],['../jquery-ui-1_810_83_8custom_8js.html#a0dd351075c8ad17f9472cb9424deab0d',1,'widget(&quot;ui.autocomplete&quot;,$.ui.autocomplete,{options:{messages:{noResults:&quot;No search results.&quot;, results:function(amount){return amount+(amount &gt; 1?&quot; results are&quot;:&quot; result is&quot;)+&quot; available, use up and down arrow keys to navigate.&quot;;}}}, __response:function(content){var message;this._superApply(arguments);if(this.options.disabled||this.cancelSearch){return;}if(content &amp;&amp;content.length){message=this.options.messages.results(content.length);}else{message=this.options.messages.noResults;}this.liveRegion.text(message);}}):&#160;jquery-ui-1.10.3.custom.js'],['../jquery-ui-1_810_83_8custom_8min_8js.html#a175590539c18cdb8be1adc1c2cb681a5',1,'widget(&quot;ui.mouse&quot;,{version:&quot;1.10.3&quot;, options:{cancel:&quot;input,textarea,button,select,option&quot;, distance:1, delay:0}, _mouseInit:function(){var t=this;this.element.bind(&quot;mousedown.&quot;+this.widgetName, function(e){return t._mouseDown(e)}).bind(&quot;click.&quot;+this.widgetName, function(i){return!0===e.data(i.target, t.widgetName+&quot;.preventClickEvent&quot;)?(e.removeData(i.target, t.widgetName+&quot;.preventClickEvent&quot;), i.stopImmediatePropagation(),!1):undefined}), this.started=!1}, _mouseDestroy:function(){this.element.unbind(&quot;.&quot;+this.widgetName), this._mouseMoveDelegate &amp;&amp;e(document).unbind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).unbind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate)}, _mouseDown:function(i){if(!t){this._mouseStarted &amp;&amp;this._mouseUp(i), this._mouseDownEvent=i;var s=this, n=1===i.which, a=&quot;string&quot;==typeof this.options.cancel &amp;&amp;i.target.nodeName?e(i.target).closest(this.options.cancel).length:!1;return n &amp;&amp;!a &amp;&amp;this._mouseCapture(i)?(this.mouseDelayMet=!this.options.delay, this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){s.mouseDelayMet=!0}, this.options.delay)), this._mouseDistanceMet(i)&amp;&amp;this._mouseDelayMet(i)&amp;&amp;(this._mouseStarted=this._mouseStart(i)!==!1,!this._mouseStarted)?(i.preventDefault(),!0):(!0===e.data(i.target, this.widgetName+&quot;.preventClickEvent&quot;)&amp;&amp;e.removeData(i.target, this.widgetName+&quot;.preventClickEvent&quot;), this._mouseMoveDelegate=function(e){return s._mouseMove(e)}, this._mouseUpDelegate=function(e){return s._mouseUp(e)}, e(document).bind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).bind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate), i.preventDefault(), t=!0,!0)):!0}}, _mouseMove:function(t){return e.ui.ie &amp;&amp;(!document.documentMode||9 &gt;document.documentMode)&amp;&amp;!t.button?this._mouseUp(t):this._mouseStarted?(this._mouseDrag(t), t.preventDefault()):(this._mouseDistanceMet(t)&amp;&amp;this._mouseDelayMet(t)&amp;&amp;(this._mouseStarted=this._mouseStart(this._mouseDownEvent, t)!==!1, this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)}, _mouseUp:function(t){return e(document).unbind(&quot;mousemove.&quot;+this.widgetName, this._mouseMoveDelegate).unbind(&quot;mouseup.&quot;+this.widgetName, this._mouseUpDelegate), this._mouseStarted &amp;&amp;(this._mouseStarted=!1, t.target===this._mouseDownEvent.target &amp;&amp;e.data(t.target, this.widgetName+&quot;.preventClickEvent&quot;,!0), this._mouseStop(t)),!1}, _mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX), Math.abs(this._mouseDownEvent.pageY-e.pageY))&gt;=this.options.distance}, _mouseDelayMet:function(){return this.mouseDelayMet}, _mouseStart:function(){}, _mouseDrag:function(){}, _mouseStop:function(){}, _mouseCapture:function(){return!0}})})(jQuery):&#160;jquery-ui-1.10.3.custom.min.js'],['../jquery-ui-1_810_83_8custom_8min_8js.html#a865723e25ab87f3e5a43896cb547ebf8',1,'widget(&quot;ui.autocomplete&quot;, t.ui.autocomplete,{options:{messages:{noResults:&quot;No search results.&quot;, results:function(t){return t+(t &gt;1?&quot; results are&quot;:&quot; result is&quot;)+&quot; available, use up and down arrow keys to navigate.&quot;}}}, __response:function(t){var e;this._superApply(arguments), this.options.disabled||this.cancelSearch||(e=t &amp;&amp;t.length?this.options.messages.results(t.length):this.options.messages.noResults, this.liveRegion.text(e))}})})(jQuery):&#160;jquery-ui-1.10.3.custom.min.js'],['../search_8js.html#acd7d1cd3b79292fd9fca360e8893f879',1,'widget(&quot;custom.catcomplete&quot;, jQuery.ui.autocomplete,{_renderMenu:function(ul, items){var that=this, currentCategory=&quot;&quot;;jQuery.each(items, function(index, item){if(item.category!=currentCategory){ul.append(&quot;&lt;li class=&apos;ui-autocomplete-category&apos;&gt;&quot;+item.category+&quot;&lt;/li&gt;&quot;);currentCategory=item.category;}that._renderItemData(ul, item);});}}):&#160;search.js']]],
  ['wiki',['wiki',['../class_groups_controller.html#a0023a9ede72a42f86a541be148ad577c',1,'GroupsController']]],
  ['windows_5f1252_5fto_5futf8',['windows_1252_to_utf8',['../class_simple_pie___misc.html#a73a72fc77a51116c036d70b9ed871765',1,'SimplePie_Misc']]],
  ['wipeentity',['wipeEntity',['../class_rox_entity_base.html#ac0032c3707c30a8d6102279692b0927d',1,'RoxEntityBase']]],
  ['wordcodeexist',['wordcodeExist',['../class_admin_word_model.html#a23c135b311c0a0d6d52d42a8ce58534d',1,'AdminWordModel']]],
  ['wordsdownload',['wordsDownload',['../class_admin_controller.html#acdea1ca7c20f59989befcfd95e5438b4',1,'AdminController\wordsDownload()'],['../class_admin_view.html#a355e17dd1bceca7c44b2ec1b060222f9',1,'AdminView\wordsdownload()']]],
  ['wordsdownload_5fteaser',['wordsdownload_teaser',['../class_admin_view.html#a2c909849e99b89c5b108e3c0c2cf55fa',1,'AdminView']]],
  ['wordsoverview',['wordsOverview',['../class_admin_controller.html#a85a846449e893022006b2af687e3baac',1,'AdminController']]],
  ['write',['write',['../class_m_o_d__log.html#afd9dc51c5ca8c361290f9755d49bda35',1,'MOD_log\write()'],['../include__markercluster__css_8js.html#a4d334cd19f5de7bdaec1f0a3b9f29e46',1,'write(&apos;&lt; link media=&quot;all&quot;type=&quot;text/css&quot;href=&quot;&apos; + leafletMarkerClusterCssBase + &apos;MarkerCluster.Default.css&quot;rel=&quot;stylesheet&quot;&gt;&apos;):&#160;include_markercluster_css.js'],['../include__css_8js.html#ac6517e0e7e5d7531ce20cc5256af0a74',1,'write(&apos;&lt; link media=&quot;all&quot;type=&quot;text/css&quot;href=&quot;&apos; + leafletCssBase + &apos;leaflet.css&quot;rel=&quot;stylesheet&quot;&gt;&apos;):&#160;include_css.js']]],
  ['writeencrypted',['writeEncrypted',['../class_m_o_d__encdb.html#afca8ca668c3f83fb6e9274e9dbb9d7f8',1,'MOD_encdb']]],
  ['writefeedback',['writeFeedback',['../class_signup_model.html#a8a78ff178f3605e9189b5a72d9a0edea',1,'SignupModel']]],
  ['writeidmember',['writeIdMember',['../class_m_o_d__log.html#a9fa7e1a23b1de24ce3916550d5523cf1',1,'MOD_log']]],
  ['writelinklist',['writeLinkList',['../class_link_model.html#af68ba7ff4353be2fb53c420511de13eb',1,'LinkModel']]],
  ['writememberphoto',['writeMemberphoto',['../class_members_model.html#ad35967459da3bbf50857f504b9d88e9a',1,'MembersModel']]],
  ['writenoteformember',['writeNoteForMember',['../class_members_model.html#adb1925203cbb5d8f234e91347b032c1b',1,'MembersModel']]],
  ['writesettingstofile',['writeSettingsToFile',['../class_rox_local_settings_importer.html#a5846cc94e0ef19664bb37539ed445b0d',1,'RoxLocalSettingsImporter']]],
  ['ww',['ww',['../class_word_print_strategy__notranslate.html#aabc4d8ee2d1f08ce9198c93ca9d8cc8d',1,'WordPrintStrategy_notranslate\ww()'],['../class_word_print_strategy__translate.html#a49101e1f88d6a3ec066e3fca35b7d2d4',1,'WordPrintStrategy_translate\ww()']]],
  ['wwattribute',['wwattribute',['../class_word_print_strategy__notranslate.html#abd07f0b90bc23c2031d87bd48286dea4',1,'WordPrintStrategy_notranslate']]],
  ['wwscript',['wwscript',['../class_word_print_strategy__notranslate.html#ae44284f8456beeb6f62cd2b6b03a4e68',1,'WordPrintStrategy_notranslate']]],
  ['wwsilent',['wwsilent',['../class_word_print_strategy__notranslate.html#a3d65ee9aa8275cfd1b76897e89bd98ee',1,'WordPrintStrategy_notranslate']]]
];