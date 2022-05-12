@extends('pages.layout')

@section('title', 'Help & Support | ')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>How to Lodge a Complaint</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">
            <div class="section-header">
                <h2>Lodge a Complaint</h2>
            </div>
            <div style="text-align: center">
                <a href="Sinhala.pdf"
                    style="text-align: left; background-color: #91aa37; margin: 5px 0; padding: 5px 5px; color: white"
                    class="btn" download="">පාරිභෝගික පැමිණිලි හැසිරවීමේ ක්‍රියාපටිපාටිය බාගත
                    කරන්න</a><br>
                <a href="Tamil.pdf"
                    style="text-align: left; background-color: #91aa37; margin: 5px 0; padding: 5px 5px; color: white"
                    class="btn" download="">வாடிக்கையாளர் முறைப்பாடுகளை கையாளும் நடைமுறையினை
                    பதிவிறக்கவும்</a><br>
                <a href="English.pdf"
                    style="text-align: left; background-color: #91aa37; margin: 5px 0; padding: 5px 5px; color: white"
                    class="btn" download="">Download Complaints Handling Procedure</a>
            </div><br><br>
            <div style="text-align: right">
                <a href="/complaints"><button class="btn btn-success">LODGE A COMPLAINT</button></a>
            </div>
        </div>
    </section><br><br><br><br>
    <!-- End About Section -->


@endsection
