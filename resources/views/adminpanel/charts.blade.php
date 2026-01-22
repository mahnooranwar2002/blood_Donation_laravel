<div>
    <canvas id="requestChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('requestChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut', // Pie chart donation requests ke liye behtar hai
        data: {
            labels: {!! json_encode($labels) !!},
            datasets: [{
                label: 'Requests by Blood Group',
                data: {!! json_encode($counts) !!},
                backgroundColor: [
                    '#e74c3c', '#3498db', '#2ecc71', '#f1c40f', '#9b59b6', '#34495e'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Blood Donation Requests Distribution' }
            }
        }
    });
</script>