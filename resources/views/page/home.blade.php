@extends('layouts.master')

@section('main')
<div class="row">
    <div class="col-lg-12 text-center">
    </div>
</div>
<div class="row py-4">
    <div class="col-lg-7 my-auto order-2 order-lg-1">
        <h2 class="fw-bold">รับทำเว็บหนัง บริการเซิฟเวอร์หนัง</h2>
        <h3 class="fs-6 text-muted">รับทำเว็บหนังสำเร็จรูป เซิฟเวอร์หนังพร้อมอัพเดทหนังให้ฟรี ราคาถูก</h3>
        <a href="#" class="btn btn-outline-primary rounded-pill">ลายละเอียดเพิ่มเติม</a>
        <a href="#contact" class="btn btn-primary rounded-pill px-5">สั่งซื้อ</a>
    </div>
    <div class="col-lg-5 order-1 order-lg-2">
        <img src="{{ asset('/images/Streamingsever2.png') }}" alt=""  class="img-fluid">
    </div>
</div>
<div class="row my-4">
    <div class="col-lg-6 order-2 order-lg-1 my-auto">
        <h2 class="fw-bold">รับทำเว็บผลบอดสด ช่องทีวีออนไลน์</h2>
        <h3 class="fs-6 text-muted">เว็บแสดงผลบอลสด (livescore) พร้อมช่องทีวีออนไลน์สดทั้งช่องต่างประเทศและช่องไทย</h3>
        <a href="#" class="btn btn-outline-primary rounded-pill">ตัวอย่าง</a>
        <a href="#contact" class="btn btn-primary rounded-pill px-5">สั่งซื้อ</a>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 ">
        <img src="https://www.img.in.th/images/fdd8191625204292413a7783707539f8.png" alt=""  class="img-fluid">
    </div>
</div>
<div class="row my-4 text-center">
    <h1 class="fs-3">รับทำเว็บหนัง สคริปเว็บหนัง เว็บสำเร็จรูป รับทำเว็บผลบอลสด ช่องทีวีออนไลน์ IPTV</h1>
</div>
</div>
<div class="bg-dark" id="contact">
<div class="container">
    <div class="row justify-content-center gap-3">
        <div class="col-lg-5 text-white py-5 my-auto text-center">
            <b class="fs-3">ติดต่อเรา</b>
            <p class="fs-5 text-muted">สอบถามราคาและรายละเอียดเพิ่มเติมได้ที่</p>
            <a href="#" class="btn btn-success my-auto rounded-pill"><i class="fab fa-line "></i> line: @iamtheme.th</a>
            <br>
            <br>
            <a href="#" class="btn btn-success my-auto rounded-pill"><i class="fab fa-facebook-square"></i> fb.com/iamthemes</a>
            <br>
            <br>
            <a href="#" class="btn btn-success my-auto rounded-pill"><i class="fas fa-phone-alt"></i> 0909315032</a>
            <br>
            <br>
            <img src="https://s9.gifyu.com/images/giphy-13833af42a36f56af.gif"alt="">
        </div>
    </div>
</div>
@endsection
