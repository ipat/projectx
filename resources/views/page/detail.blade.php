@extends('app')

@section('content')                


<link rel="stylesheet" type="text/css" href="{{ url('css/d3Style.css') }}">




<div class="container">
         <div class="row">
           <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">Tree Map</div>
                    <div class="panel-body">
                         <iframe sandbox="allow-scripts allow-forms allow-same-origin" src="http://localhost:8888/projectxx/public/pie" marginleft="-20" width="100%" height="500" marginwidth="10" marginheight="0" scrolling="no"></iframe>
          
           
                    </div>
              </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row">
           <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">Tree Map</div>
                    <div class="panel-body">
                         <iframe sandbox="allow-scripts allow-forms allow-same-origin" src="http://localhost:8888/projectxx/public/li" marginleft="20" width="100%" height="500" marginwidth="10" marginheight="0" scrolling="no"></iframe>
          
           
                    </div>
              </div>
            </div>
         </div>
      </div>



<div class="container">
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ข้อมูลของรายวิชา {{ $article->title }}</div>

                        <!-- <div class="panel-body">
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
          
                        <b>รีวิวจากรุ่นพี่:</b></p>
                        <p>รายวิชานี้ยากมาก ถ้าเรียนไม่ไหวแนะนำให้ถอนแล้วไปเรียนในซัมเมอร์</p>
           
                        <b>เว็บไซต์:</b></p>
                        <p>www.clipvidva.com</p> -->
                <div class="panel-body">   
                    <b>ข้อมูลเพิ่มเติม:</b></p>
                    <p>{{ $article->body1 }}</p>
                    <b>ข้อมูลเพิ่มเติม:</b></p>
                    <p>{{ $article->body2 }}</p>
      
                    <b>รีวิวจากรุ่นพี่:</b></p>
                    <p>{{ $article->body3 }}</p>
       
                    <b>เว็บไซต์:</b></p>
                    <p>{{ $article->body4 }}</p>

                 </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">กราฟแสดงข้อมูลรายวิชา {{ $article->title }}</div>

                        <!-- <div class="panel-body">
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
          
                        <b>รีวิวจากรุ่นพี่:</b></p>
                        <p>รายวิชานี้ยากมาก ถ้าเรียนไม่ไหวแนะนำให้ถอนแล้วไปเรียนในซัมเมอร์</p>
           
                        <b>เว็บไซต์:</b></p>
                        <p>www.clipvidva.com</p> -->
                <div class="panel-body">   
                    <b>ข้อมูลเพิ่มเติม:</b></p>
                    <p>{{ $article->body1 }}</p>
                    
                 </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Comment {{ $article->title }}</div>

                        <!-- <div class="panel-body">
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
                        <b>ข้อมูลเพิ่มเติม:</b></p>
                        <p>รายวิชาเกี่ยวกับวิชา ฟิสิก 1 เนื้อหาดังนี้</p>
          
                        <b>รีวิวจากรุ่นพี่:</b></p>
                        <p>รายวิชานี้ยากมาก ถ้าเรียนไม่ไหวแนะนำให้ถอนแล้วไปเรียนในซัมเมอร์</p>
           
                        <b>เว็บไซต์:</b></p>
                        <p>www.clipvidva.com</p> -->
                <div class="panel-body">   
                    <b>comment :</b></p>
                    

                 </div>
                 
            </div>
            
        </div>
        
    </div>
    
</div>


<script src="{{ url('js/d3.min.js') }}"></script>
<script src="{{ url('js/d3Script.js') }}"></script>



@endsection      

 
