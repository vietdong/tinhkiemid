$(function(){function closeSearch(){var $form=$('.navbar-collapse form[role="search"].active')
$form.find('input').val('');$form.removeClass('active');}
$(document).on('click','.navbar-collapse form[role="search"]:not(.active) button[type="submit"]',function(event){event.preventDefault();var $form=$(this).closest('form'),$input=$form.find('input');$form.addClass('active');$input.focus();});$(document).on('click','.navbar-collapse form[role="search"].active button[type="submit"]',function(event){event.preventDefault();var $form=$(this).closest('form'),$input=$form.find('input');$('#showSearchTerm').text($input.val());closeSearch()});});(function($){$(function(){var screensize=document.documentElement.clientWidth;if(screensize<768){$(document).off('click.bs.tab.data-api','[data-hover="tab"]');$(document).on('mouseenter.bs.tab.data-api','[data-toggle="tab"], [data-hover="tab"]',function(){$(this).tab('show');});}
else{}});})(jQuery);$(function(){$('a[href*=#]','.nav-tabs-left li').on('click',function(e){e.preventDefault();$('html, body').animate({scrollTop:$($(this).attr('href')).offset().top},500,'linear');});});