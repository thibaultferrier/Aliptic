$(document).ready(function(){

			var $jours = $('.jour');
			var $puces = $('.bullets .entypo-record');

			function init(){
				$jours.hide().first().show();
				$puces.removeClass('active').first().addClass('active');
			}
				
			$puces.click(function(){
				var $this = $(this);
				var cible = $this.attr('data-cible');

				$jours.hide();
				$($jours.get(cible)).show();

				$puces.removeClass('active');
				$this.addClass('active');
			});

			init();

		});