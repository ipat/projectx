@extends('app')

@section('content')                

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
                    <p>รายวิชานี้ยากมาก ถ้าเรียนไม่ไหวแนะนำให้ถอนแล้วไปเรียนในซัมเมอร์</p>
       
                    <b>เว็บไซต์:</b></p>
                    <p>www.clipvidva.com</p>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection      

 
