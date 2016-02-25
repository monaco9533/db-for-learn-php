<?php if(Phpfox::getParam('multiplephoto.on') && Phpfox::getUserParam('multiplephoto.can_upload_multiple_photos')) : ?>
<?php echo "<script type='text/javascript'>document.getElementById('global_attachment_photo_file_input').setAttribute('multiple', 'multiple');document.getElementById('global_attachment_photo_file_input').setAttribute('accept', 'image/*');</script>"; ?>
<script type="text/javascript">
setTimeout("$('#global_attachment_photo .extra_info').html('<?php echo Phpfox::getPhrase('multiplephoto.attach'); ?>');", 1000);
document.getElementById("js_activity_feed_form").addEventListener("submit",function(){$("#pncancel-hold").css("display","none");});
function handleFiles(){var e=document.getElementById("global_attachment_photo_file_input");$("#up-preview ul").html("");var t=e.files;if(t.length><?php echo Phpfox::getParam('multiplephoto.total_limit'); ?>){alert("<?php echo Phpfox::getPhrase('multiplephoto.too_many_files'); ?> <?php echo Phpfox::getParam('multiplephoto.total_limit'); ?>");$(e).val("")}else{var n=window.URL||window.webkitURL;for(var r=0;r<t.length;r++){var i=t[r];var s=n.createObjectURL(t[r]);$("#up-preview ul").append("<li><img src='"+s+"' alt='' title= '"+i.name+"' /></li>");ul=$("#up-preview ul");ul.children().each(function(e,t){ul.prepend(t)});window.URL.revokeObjectURL(t[r])}var o=$("#up-preview ul").children().length;if(o=="0"){$(".global_attachment_holder_section .extra_info").css("display","block");$("#pncancel-hold").css("display","none")}else{$("#global_attachment_photo .extra_info").css("display","none");$("#pncancel-hold").css("display","block")}}}function resetVform(){$("#global_attachment_photo_file_input").val("");$("#up-preview ul").html("");$("#global_attachment_photo .extra_info").html("<?php echo Phpfox::getPhrase('multiplephoto.attach'); ?>");$("#global_attachment_photo .extra_info").css("display","block");$("#pncancel-hold").css("display","none")}document.getElementById("global_attachment_photo_file_input").addEventListener("change",function(){handleFiles()});$Behavior.feedPhotoForm = function(){$ActivityFeedCompleted.resetPhotoForm = function(){$("#up-preview ul").html("");$('#global_attachment_photo_file_input').val('');}}
</script>
<style type="text/css">
#up-preview { overflow: auto; margin: 10px 0px 0px 4px; }
#up-preview ul li { float: left; height: 115px; width: 115px; position: relative; padding: 5px; }
#up-preview ul li img { height: 115px; width: 115px; box-shadow: 0px 0px 3px #333; -moz-box-shadow: 0px 0px 3px #333; -webkit-box-shadow: 0px 0px 3px #333;}
<?php if(Phpfox::isMobile() || Phpfox::getService('profile')->timeline()) : ?>
#pncancel-hold { display: none; position: relative; height: 35px; right: 0px;}
<?php else : ?>
#pncancel-hold { display: none; position: absolute; height: 25px; top: 44px; right: 0px; }
<?php endif; ?>
#pncancel { background: #BD3838; color: #fff; position: absolute; padding: 8px 2px 8px 2px; margin: 1px 0px 0px 0px; font-size: 12px; width: auto; right: 12px; text-align: center; min-width: 60px; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 3px; text-decoration: none; box-shadow: 0px 0px 2px #000; -moz-box-shadow: 0px 0px 2px #000; -webkit-box-shadow: 0px 0px 2px #000; }
</style>
<div id="up-preview"><ul></ul></div>
<div id="pncancel-hold"><a href="#" id="pncancel" onclick="resetVform(); return false;"><?php echo Phpfox::getPhrase('multiplephoto.cancel'); ?></a></div>
<?php endif; ?>