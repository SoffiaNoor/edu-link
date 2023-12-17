@extends('layouts.master')

@section('content')
<div class="container-fluid px-3 pt-1">
    <div class="row">
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-danger border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Jumlah Murid EduLink</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Murid::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/murid" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-info border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Jumlah Mentor EduLink</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Mentor::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/dosen" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mt-2" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
            <div class="info-horizontal bg-gradient-success border-radius-xl p-3">
                <div class="icon">
                    <i class="fa fa-book text-2xl text-white mt-1"></i>
                </div>
                <div class="description ps-5">
                    <h6 class="text-white font-weight-bolder">Jumlah Mata Pelajaran EduLink</h6>
                    <h2 class="text-white"
                        style="background: linear-gradient(to right, #ffffffc9, #f1f8ff);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">
                        {{ \App\Models\Mapel::count() }}
                    </h2>
                    <hr class="m-0" style="background-color:#ffffff;height:10px;border-radius:40px;width:50%">
                    <a href="/dosen" class="text-light icon-move-right font-weight-bolder" style="font-style:italic">
                        Lihat lebih lanjut
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine">
        <div class="col-lg-5">
            <div class="card card-carousel overflow-hidden h-full p-0">
                <div class="py-2 px-4" style="background-color:#051836!important;color:white">
                    <h6 class="text-white font-weight-bolder">Murid Pendaftar EduLink</h6>
                    <canvas id="myDoughnutChart" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card card-carousel overflow-hidden h-full p-0">
                <div class="py-2 px-4" style="background-color:#051836!important;color:white">
                    <h6 class="text-white font-weight-bolder">Diagram Pemesanan Mata Pelajaran</h6>
                    <canvas id="subjectSalesChart" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
<script>
    var data = {
    labels: ['Murid Perempuan', 'Murid Laki-Laki'],
    datasets: [{
        data: [{{ $femaleCount }}, {{ $maleCount }}],
        backgroundColor: ['rgba(255, 206, 86, 0.8)', 'rgba(54, 162, 235, 0.8)'],
        hoverBackgroundColor: ['rgba(255, 206, 86, 1)', 'rgba(54, 162, 235, 1)'],
        }]
    };

    var ctx2 = document.getElementById('myDoughnutChart').getContext('2d');

    var myDoughnutChart = new Chart(ctx2, {
        type: 'doughnut',
        data: data,
    });
    
    
    fetch('/api/chart-data')
    .then(response => response.json())
    .then(data => {
        var subjectData = data.map(item => item.idmapel);

        var idmapelCounts = countOccurrences(subjectData);

        var labels = Object.keys(idmapelCounts);
        var chartData = Object.values(idmapelCounts);

        // Set up the new chart
        var ctx = document.getElementById('subjectSalesChart').getContext('2d');

        var subjectSalesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pembelian Mata Pelajaran Terbanyak',
                    data: chartData,
                    backgroundColor: 'rgba(75, 192, 192, 0.8)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));

function countOccurrences(arr) {
    var counts = {};
    for (var i = 0; i < arr.length; i++) {
        var num = arr[i];
        counts[num] = counts[num] ? counts[num] + 1 : 1;
    }
    return counts;
}
</script>
@endsection