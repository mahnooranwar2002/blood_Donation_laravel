@include('website.includes.Navbar')

<section class="page-header">
    <div class="bannerOverlay">
        <div class="container bannar_content">
            <h3>Frequently Asked Question</h3>
        </div>
    </div>

</section>
<div class="faq-section container">

@if($faqsdata && $faqsdata->count() > 0)
@foreach ( $faqsdata as $row )
    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">
               {{ $row->question }}
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="faq-answer">
                <p>   {{ $row->answer }}</p>
            </div>
        </div>
 </div>  
@endforeach
  
 @else
 <div class="container">
    <p>There is no faq</p>
 </div>
 @endif
</div>
@include('website.includes.footer')

<style>


.faq-section {
    width: 100%;
    max-width: 700px;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
}

.faq-section h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

.faq-item {
    border-bottom: 2px solid #e74c3c;
   
  

}
p{
 padding: 20px 0px 0px 0px;
    font-size: 16px;
    color:#555555;
    letter-spacing: 0.16px;
    line-height: 1.6;
}

.faq-question {
    width: 100%;
    padding: 20px 10px;
    background: none;
    border: none;
    outline: none;
    text-align: left;
    font-size: 18px;
    font-weight: 600;
    color: #444;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s;
}

.faq-question:hover {
    color: #e74c3c;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    
    transition: max-height 0.3s ease-out;
    background-color: #ece4e4;
}

.faq-answer p {
    padding: 0 15px 20px 15px;
    color: #666;
    line-height: 1.6;
}

/* Jab active ho to answer dikhayen */
.faq-item.active .faq-answer {
    max-height: 200px; /* Jawab ki lambai ke hisab se adjust karein */
}

/* Icon rotation */
.faq-item.active .faq-question i {
    transform: rotate(180deg);
}
</style>
<script>
    document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;

        // Baki sab ko band karne ke liye (Optional)
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
            }
        });

        // Current item ko toggle karein
        faqItem.classList.toggle('active');
    });
});
</script>