
<div style="width:100%;color:#FF9; padding-bottom:15px;">
    <canvas id="buyers" ></canvas>
</div>
<script>
    // get line chart canvas
    var buyers = document.getElementById('buyers').getContext('2d');

    var myLineChart = new Chart(buyers,{
        type: 'line',
        data: <?php echo $strJSON;?>,
        options: {
            responsive: true,
            title: {
                //display: true,
                //position:'right',
                //text:'Doanh thu năm 2016'
            },// end title
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Tháng Năm',

                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Trị giá'
                    },
                    ticks: {
                        suggestedMin: -10,
                        suggestedMax: 250,
                    }
                }]
            }
        }
    });
</script>