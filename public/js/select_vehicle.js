var i=1;
car_on=new Image
car_on.src="img/car_on.png"
car_off=new Image
car_off.src="img/car_off.png"
motorbike_on=new Image
motorbike_on.src="img/motorbike_on.png"
motorbike_off=new Image
motorbike_off.src="img/motorbike_off.png"
function cambia_imagen_coche() {
   if (i == 1)
      {
        document.images['change_car'].src=car_on.src;
        document.images['change_motorbike'].src=motorbike_off.src;
        document.getElementById('car').value = 'car';
        document.getElementById('bike').value = '';
      }
   }
function cambia_imagen_moto() {
   if (i == 1)
      {
        document.images['change_motorbike'].src=motorbike_on.src;
        document.images['change_car'].src=car_off.src;
        document.getElementById('bike').value = 'bike';
        document.getElementById('car').value = '';
      }
   }
