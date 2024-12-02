<?php 
$pageTitle = "Grants";
$pageDesc = "Delegates and participants from specific geographies can avail grants and discounted fees to attend the conference.";
$pagePreviewImage = 'img/grants_preview.jpg';
	
include("header.php"); 
include_once("pricing.php");


?>
        
           
    <div class="content wrapper">
    <?php include("attending-nav.php"); ?>
		<div class="right-col">
        <article>
            <h2><?php echo $pageTitle ?></h2>
            <p>Delegates and participants from specific geographies can avail grants and discounted fees to attend the conference. Details of the available grants is mentioned below. Newer grants and opportunities will be updated on this page. </p>
            <h3>Developing Countries</h3>
            <section>
                <p>To encourage participants from developing countries, INTERACT 2017 is offering <span class="bold">0</span> (extended from the earlier limit of 100) participants from developing countries an additional discount of <?php coursePricing($developingCountryDiscount); ?> on Full Conference registrations.</p>
<p>
These will be on a first-come-first-served basis and applicable as per the <a href="<?php echo $unescoDevCountryURL?>" target="_blank">IFCD List of Eligible Developing Countries</a></p>
           <p>Discounts can be availed by selecting your country during the <a href="registration">registration</a>. <span class="text-highlight">Currently, there are only 0 passes left.</span></p>
            </section>
            <h3>IFIP DCSC Support (Second Call)</h3>
            <section>
            	<p>After the decision on the applications for the first call, some funding for grants is
remaining. For this reason, the IFIP TC13 Grants Committee has decided to open a
new call for applications, with the same requirements.</p>
           	 <p>Please see the initial call (below) and the document for details.</p>
            	 <div class="info document"><p><a href="files/ifip_dcsc_grant_second_call.pdf" target="_blank">Complete details of the second call and the application deadlines can be found here</a>.</p></div>
            </section>
            <h3>IFIP DCSC Support (Initial Call)</h3>
            <section>
               <p>The IFIP TC13 on HCI, and the IFIP Developing Countries
Support Committee (DCSC) will partially support students and early stage researchers
				   from developing countries to attend the INTERACT 2017 Conference.</p><p>
These grants are set up to support early stage researchers, and PhD and Master students
who personally present papers accepted in any of the conference tracks. Each awarded student/early stage researcher will be reimbursed the travelling costs to
Mumbai to a maximum of $1000 USD, and the lodging to a maximum of $300 USD (no
other subsistence expenses will be reimbursed). All the awardees will receive a free
student conference registration and will be able to participate in workshops and/or
tutorials at no cost.</p>
           <div class="info document"><p><a href="files/ifip_dcsc_grant.pdf" target="_blank">Complete details of the grant and the application process can be found here</a>.</p></div>
            </section>
            <h3>SIGCHI Gary Marsden Student Development Fund</h3>
            <section>
               <p>In recognition of Gary Marsden’s contributions and inspiration in HCI4D, ACM SIGCHI established the Gary Marsden Student Development Fund. The purpose of this fund is to support the growth of HCI in developing worlds by sponsoring SIGCHI Student Members who are postgraduate students from and currently based in developing countries to attend HCI-relevant conferences.</p> 
               
               <p>For those who are currently not student members of SIGCHI, you can <a href="https://campus2.acm.org/public/qj/gensigqj/gensigqj_control.cfm?promo=QJSIG&form_type=SIG&offering=026&sigstu=SIG_STUD&byp=1&CFID=429048&CFTOKEN=77335301" target="_blank">apply online to become a member</a> with USD 19 before submitting the application.</p>
 
<p>For more information about applying for the funding, please see the fund guidelines on <a href="http://www.sigchi.org/ resources/gary-marsden- student-development-fund" target="_blank">the SIGCHI website</a>.</p>

            </section>
        </article>
        </div>
    </div>


    <?php include("footer.php"); ?>