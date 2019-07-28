<?php

return array(


		'news/([0-9]+)' => 'news/view/$1',

		'news' => 'news/index',

		'cart/addAjax/([0-9]+)' => 'cart/AddAjax/$1',

		'cart/deleteProduct/([0-9]+)' => 'cart/delete/$1',

		'cart/checkout' => 'cart/checkout',

		'cart' => 'cart/index',

		'catalog/(a-z]+)/([0-9]+)' => 'catalog/category/$1/$2',

		'catalog/([a-z]+)' => 'catalog/category/$1',

		'catalog/([0-9]+)' => 'catalog/item/$1',

		'catalog' => 'catalog/list',

		'delivery' => 'info/delivery',

		'comments' => 'comments/index',

		'aboutus' => 'info/aboutus',

		'order' => 'info/order',

		'guarantees' => 'info/guarantees',

		'discounts' => 'info/discounts',

		'cart' => 'cart/index',

		'' => 'info/main',











);

