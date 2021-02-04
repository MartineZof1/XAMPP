<?php
$title = "Контакт";                   
include ("tmp/header.php");                 
?>
<!-- begin contact content -->
<div class="container">
  <main>
  	<div class="col-12">
   		<div class="py-5 text-center">
      
      		<h2>Контактная форма</h2>
      		<p class="lead">Через контактную форму вы можете задать любые 
			интересующие вас вопросы, на которые мы ответим в кротчайшие сроки!</p>
    	</div>

    	<div class="row g-3">
      		<div class="col-md-6 col-lg-6 order-md-last">
        		<h4 class="d-flex justify-content-between align-items-center mb-3">
          		Контактная информация
        		</h4>
        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2415.958157046315!2d27.794250316185266!3d59.390192943493595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469465619a0f912b%3A0xee11cf458e829282!2z0JjQtNCwLdCS0LjRgNGD0LzQsNCw0YHQutC40Lkg0KbQtdC90YLRgCDQn9GA0L7RhNC10YHRgdC40L7QvdCw0LvRjNC90L7Qs9C-INCe0LHRgNCw0LfQvtCy0LDQvdC40Y8!5e0!3m2!1sru!2see!4v1612373514877!5m2!1sru!2see" 
					width="600" height="350" 
					frameborder="0" style="border:0;" 
					allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      		</div>
      		<div class="col-md-6 col-lg-6">
        		<h4 class="mb-3">Свяжитесь с нами</h4>
        		<form method="post">
          		<div class="row g-3">
            	<div class="col-12">
					<label class="form-label">Имя</label>
					<input type="text" name="name" class="form-control" required>
           		</div>
            	<div class="col-12">
              		<label class="form-label">E-mail</label>
              		<input type="email" class="form-control" 
					name="email"required>
            	</div>
            	<div class="col-12">
              		<label for="address" class="form-label">Сообщение</label>
              		<textarea type="text" class="form-control" 
					name="message" required></textarea>
	            </div>
          		</div>
          		<br></br>
          		<button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Отправить</button>
        		</form>
      		</div>
    	</div>
    </div>
  	</main>
</div>
<!-- end contact content -->

<?php
include ("tmp/footer.php");                 
?>