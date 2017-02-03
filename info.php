<?php
	$response=array();
	$status = "1";
	$category=array();
	
	//----------------------------- swimming -------------------------------------------  
	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));
	$category['swimming']=$event;
	//array_push($category,'swimming' =>$event);

	//------------------cricket------------------------
	$event=array();

	$name="Cricket";
	$male = array('price' =>500 ,'tsize'=>15 );
	$female = array('price' =>200 ,'tsize'=>15 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Cricket' =>$event));
	$category['cricket']=$event;

	//------------------football---------------------------

	$event=array();

	$name="Football";
	$male = array('price' =>500 ,'tsize'=>15 );
	$female = array('price' =>200 ,'tsize'=>15 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Football' =>$event));
	$category['football']=$event;

	//--------------------------basketball-----------------------

	$event=array();

	$name="BasketBall";
	$male = array('price' =>500 ,'tsize'=>12 );
	$female = array('price' =>200 ,'tsize'=>12 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Basketball' =>$event));
	$category['basketball']=$event;

	//-------------------------volleyball-------------------


	$event=array();

	$name="VolleyBall";
	$male = array('price' =>500 ,'tsize'=>12 );
	$female = array('price' =>200 ,'tsize'=>12 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('volleyball' =>$event));
	$category['volleyball']=$event;

	//------------------------crosscountry----------------------

	$event=array();

	$name="CrossCountry";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>5 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('crosscountry' =>$event));
	$category['crosscountry']=$event;

	//---------------------------hockey-------------------

	$event=array();

	$name="Hockey";
	$male = array('price' =>500 ,'tsize'=>15 );
	$female = array('price' =>200 ,'tsize'=>15 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Hockey' =>$event));
	$category['hockey']=$event;

	//----------------------------lawntennis--------------------
	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('LawnTennis' =>$event));
	$category['lawntennis']=$event;

	//----------------------------tabbletennis--------------------
	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('TabbleTennis' =>$event));
	$category['tabbletennis']=$event;

	//----------------------squash-----------------------------

	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Squash' =>$event));
	$category['squash']=$event;

	//----------------------badminton-----------------------------

	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Badminton' =>$event));
	$category['badminton']=$event;

	//---------------------------throwball-------------------

	$event=array();

	$name="ThrowBall";
	$male = array('price' =>500 ,'tsize'=>10 );
	$female = array('price' =>200 ,'tsize'=>10 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('ThrowBall' =>$event));
	$category['throwball']=$event;

	//---------------------------handball-------------------

	$event=array();

	$name="HandBall";
	$male = array('price' =>500 ,'tsize'=>10 );
	$female = array('price' =>200 ,'tsize'=>10 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('HandBall' =>$event));
	$category['handball']=$event;


	//----------------------atheletics-----------------------------

	$event=array();

	$name="Event 1";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 2";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	$name="Event 3";
	$male = array('price' =>500 ,'tsize'=>5 );
	$female = array('price' =>200 ,'tsize'=>6 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Atheletics' =>$event));
	$category['atheletics']=$event;

	//---------------------------chess-------------------

	$event=array();

	$name="Chess";
	$male = array('price' =>500 ,'tsize'=>10 );
	$female = array('price' =>200 ,'tsize'=>10 );

	array_push($event,array('name'=>$name,'male' =>$male ,'female' =>$female,'status'=>$status));

	//array_push($category,array('Chess' =>$event));
	$category['chess']=$event;





	echo json_encode($category);

?>