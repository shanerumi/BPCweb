<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please log in first'); window.location='login.php';</script>";
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPC Portal</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<header>
    <div class="header-left">
        <img src="https://raw.githubusercontent.com/shanerumi/milachan/refs/heads/main/LOGO-e1733733724127-297x300.png" 
        alt="BPC Logo" class="logo">
        <h1>BPC Web Portal</h1>
    </div>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#programs">Programs</a></li>
        <li><a href="#campuses">Campuses</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#campus">Mission & Vision</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</header>

<div class="middle">
    <img src="https://bulpolycol.bulacan.gov.ph/images/slider/BPC_movehere.jpg" 
         alt="BPC Banner" style="width:100%; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.15);">
</div>

<section id="about">
    <h1>About BPC</h1>
    <p>History of Bulacan Polytechnic College

The Bulacan Polytechnic College (BPC) was formerly known as the Bulacan Public Community College (BPCC). It was established upon the approval of the Secretary of Education on June 8, 1971, and started its operations in 1972. The approval came under the leadership of Governor Ignacio (Nacing) Santiago and the principal of Marcelo H. Del Pilar High School (MHPHS) Miss Juana E. Ladia, who then became the first school administrator. BPCC started with 44 enrollees. Two courses were initially offered from 1972 to 1974: the two-year Junior Secretarial course with 15 students and the General Education course with 29 students. Classes were held at Marcelo H. Del Pilar High School Main Building and started from 5 pm to 9 pm.

The dwindling enrollment of General Education in the years 1975 to 1993 triggered the opening of the Steno Typing course. Nevertheless, in 1994, due to the low number of enrollees, both General Education and Steno Typing courses were phased out.

Unfortunately, in the middle of 1995, a conflagration reduced the school into its shell. In the same year, as part of the school’s relentless step, a new building was constructed adjacent to the MHPHS Main Building. The move revealed the intention of the school to act in a more decisive role in the education of the people of Bulacan.

The advent of Computer Technology and the presence of Governor Roberto Pagdanganan helped boost of the people involved in the operation of the school. Through Governor Pagdanganan and Mrs. Amparo Y. Del Rosario, the MHPHS principal, BPCC elevated the quality of education by including the Basic Computer Literacy program in the curriculum and streamlining the other existing programs. When Mrs. Amparo Del Rosario retired from service, Ms. Rosalina G. Santos, who is also the High School Principal of MHPHS, took over as the new college administrator.

On September 29, 1997, by virtue of the Sangguniang Panlalawigan Resolution Number 97-550, the Provincial Government of Bulacan changed the name of BPCC to Bulacan Polytechnic College (BPC) and at the same time approved its Charter to provide vocational and technical instruction and entrepreneurship education. This led the school to open new courses in addition to its existing curriculum.

When Vice Governor Josefina M. Dela Cruz took over as the Bulacan Provincial Governor, she continued the full support given to BPC by the PGB. Moreover, she was designated a full-time College Administrator. Board Member Gerardo Cruz was chosen as the man behind the helm. He, an educator himself, initiated constructive changes and other innovative developments in the institution as per instructions from Gov. Dela Cruz and the BPC Board of Directors. Whole-day classes were opened to the public, (morning, afternoon, and evening) whereas previously there were only evening classes.

The pressure of the burgeoning number of enrollees necessitated the construction of a new school building in the newly acquired site in Bulihan, Malolos, Bulacan: one of the academic classes and the other for the technology courses under the Dual Training System (DTS). It was the brainchild of Gov. Dela Cruz to construct and to transfer the new school building for the trade areas and the Dual Trading System. In September 2001, the building was completed and a solemn inauguration was held. Immediately, the classes were moved to the new building. It was also in this year when Mr. Gerardo Cruz left his post to complete his Master’s Degree and Dr. Danilo Hilario of the Bulacan State University Graduate School took over as the College Administrator.

In the year 2003, Dr. Danilo Hilario was recalled to Bulacan State University. Consequently, since Mr. Gerardo Cruz has finished his Master of Arts in Education, he was again commissioned as the fulltime College Administrator.

BPC made a significant achievement in 2003. In this year, the school offered new courses namely: the 2-year Certificate in Industrial Technology (CIT), a ladderized program under the BPC-BSU Consortium with major in Electronics Technology, Electrical Technology and Welding Technology, the 2-year Certificate in Hotel and Restaurant Services Technology (CHRS); and the Competency Enhancement Program in Cooperative (CEP Coop).

During the time of Governor Josefina, the continuous progress of BPC emanated as she appointed a full time College Administrator in the person of Dr. Gerardo Cruz. And the night classes was reconstructed to whole day classes with three shifts â Morning, afternoon and night classes. To further enhance the objective of bringing education closer to the young BulakeÃ±os, BPC was established to different municipalities of Bulacan, namely BPC-San Miguel (2006), BPC-Obando and BPC-San Jose del Monte (2007), BPC-Bocaue (2008), BPC-Angat (2009), BPC-San Rafael and BPC-Pandi (2011).

In the year 2012, the College Administrator-Dr. Gerardo Cruz succumbed his resignation. He was then succeeded temporarily by Dr. Romeo Inasoria from Bulacan State University. It was in 2014 when the triumph brought pure elation as BPC offered new degree courses, the Bachelor of Science in Information System (BSIS) and Bachelor of Science in Office Management (BSOM).After four years of leadership, it is required that Dr. Romeo Inasoria be back at BULSU.

A year after the triumphant growth of BPC, Governor Wilhelmino M. Sy-Alvarado appointed Dr. Perlita M. Cruz as the OIC-College President. And with her unfailing credibility as a leader, she became the College President of BPC. Part of her accomplishments are improvement of Hotel and Restaurant Services (HRS) Laboratories through a global grant from Rotary Club of Malolos and Rotary Club of Jincheon Bonghwa South Korea who donated high-end tools and equipment. Construction of Auditorium in BPC Malolos in coordination of the Provincial Engineerâs Office and the continuing construction of covered walk in (coordination with the PTCA) from the main campus to Mc Arthur highway are the infrastructure projects of the president.

Then, the Senior High School level was a new addition to BPC based on the K-12 program of the government, with the following: Academic Tracks: General Academic Strand, Accounting-Business Management Strand; Humanities Strand; and Technological-Vocational Track with EIM, CES, HE, SMAW track were offered in the year 2015.</p>
</section>

<section id="programs">
    <h1>Programs Offered</h1>
    <div class="programs">
        <div class="program-card">
            <img src="https://kcp.edu.ph/wp-content/uploads/2023/06/banner-bsoa.jpg" 
                 alt="BSOM" style="width:100%; height:180px; object-fit:cover;">
            <p>Bachelor of Science in Office Management</p>
        </div>
        <div class="program-card">
            <img src="https://www.ciit.edu.ph/wp-content/uploads/2022/10/CIIT-BSIS-scaled-e1664953470304.jpg" 
                 alt="BSIS" style="width:100%; height:180px; object-fit:cover;">
            <p>Bachelor of Science in Information Systems</p>
        </div>
        <div class="program-card">
            <img src="https://nst.edu.ph/wp-content/uploads/2020/03/COL-21-e1621927722378-768x530.jpg" 
                 alt="BTVTED" style="width:100%; height:180px; object-fit:cover;">
            <p>BTVTED – Technical Vocational Teacher Education</p>
        </div>
        <div class="program-card">
            <img src="https://www.computersciencedegreehub.com/wp-content/uploads/2020/05/Can-I-Get-a-Decent-Job-With-an-Associates-in-Computer-Science-768x512.jpg" 
                 alt="ACT" style="width:100%; height:180px; object-fit:cover;">
            <p>Associate in Computer Technology</p>
        </div>
        <div class="program-card">
            <img src="https://raw.githubusercontent.com/shanerumi/milachan/refs/heads/main/mock-present-495x495.png" 
                 alt="BSCA" style="width:100%; height:180px; object-fit:cover;">
            <p>Bachelor of Science in Customs Administration</p>
        </div>
        <div class="program-card">
            <img src="https://iau.com.ph/dev/wp-content/uploads/2011/10/HRM_prep.png" 
                 alt="HRM" style="width:100%; height:180px; object-fit:cover;">
            <p>Hotel & Restaurant Management Technology</p>
        </div>
    </div>
</section>

<section id="campuses">
    <h1>Campuses</h1>
    <div class="bottom-photo-section">
        <div class="image-box">
            <img src="https://bulpolycol.bulacan.gov.ph/images/slider/BPCcampuses.jpg" style="width:100%; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.15); alt="BPC Campus 1">
        </div>
        <div class="image-box" style="margin-top: 20px;">
            <img src="https://bulpolycol.bulacan.gov.ph/images/slider/BPCcampuses1.jpg" style="width:100%; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.15); alt="BPC Campus 2">
        </div>
    </div>
</section>


<section id="events">
    <h1>Events</h1>
    <div class="event-cards">
        <div class="event-card">
            <img src="https://scontent.fmnl17-8.fna.fbcdn.net/v/t39.30808-6/569279957_832958895762973_4122547349711181663_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEoG-TzfCt003It78jq8lqxI54E44vGpD0jngTji8akPWafLdlEM27PjPQrvY93XBW0DI_jePv_QDC8IyO_ARC7&_nc_ohc=eOK5VeYJsH4Q7kNvwEaPRzi&_nc_oc=Adnpq5Rbj55NdY0u77_7sBmTFRlZ2LDDZg2W6Q8FmFgSZX8YGhCT1rc3sl_DFtvil2g&_nc_zt=23&_nc_ht=scontent.fmnl17-8.fna&_nc_gid=h1W2T6kA_gVR6IuWvD1YVw&oh=00_Afib59pA0JQhvX3SZsWZOdWrvhgeS0fCa4r5T-apmR6_ig&oe=69247D2F" alt="Event 1">
            <h3>Mr & Ms Intramurals</h3>
            <p>October 27, 2025</p>
        </div>
        <div class="event-card">
            <img src="https://scontent.fmnl17-2.fna.fbcdn.net/v/t39.30808-6/569318228_832959155762947_4661586568299233584_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEytitLFjPyhNj1-ScSCEFAL7EM_475EOsvsQz_jvkQ65vapIkq_NeFy6YAaeGzjTvdMjo2K-fnyGnIA_gLGmTQ&_nc_ohc=ZgR4m7tG0tUQ7kNvwEvwnRG&_nc_oc=AdmB9oVmhW2brrlNw2RzCesUgiAl5-G5N4EQRSjpYxnXW0Q63GopliO3XVwDVORjIqU&_nc_zt=23&_nc_ht=scontent.fmnl17-2.fna&_nc_gid=ZjPMK5g5EGXuLP8Wl1lZ2A&oh=00_AfiDhYCapaCSTAkMJJzXGa2p4stgSFKmclgo78WEAwnMjQ&oe=692477EF" alt="Event 2">
            <h3>Arnis Competition</h3>
            <p>October 27, 2025</p>
        </div>
        <div class="event-card">
            <img src="https://scontent.fmnl17-8.fna.fbcdn.net/v/t39.30808-6/567966111_832958925762970_4010553476093563583_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEpBtcUkN2VNRzun6QIst51OIuQbEJgG4E4i5BsQmAbgU2UHJza-lXBwOH-AR0IDPxjS6eANQ_aoP_pMYhkQbqR&_nc_ohc=F9jdu5iPqlEQ7kNvwEIa3Ar&_nc_oc=AdmuP88XBMYyqzwq5E1lzTPUfhYzZGZbRqxNPwHIzuWV29b1Gy6d36TEl3c79oyrPjo&_nc_zt=23&_nc_ht=scontent.fmnl17-8.fna&_nc_gid=fz3NTBvR_BVKm0PDKRQqUw&oh=00_AfggMiGIcuc2drPBnjlbFigW-iolAmUDOvosB4EC_CZNVw&oe=6924873F" alt="Event 3">
            <h3>Sport Competition</h3>
            <p>October 27, 2025</p>
        </div>
    </div>
</section>

<section id="campus">
    <h1>Mission, Vision, and Goals</h1>

    <div class="text-box">
        <h2>Vision</h2>
        <p>The Bulacan Polytechnic College envisions to become a lead provider of quality and affordable technical-vocational, entrepreneurial and technological education, and a producer of highly competent and productive human resources.</p>
    </div>

    <div class="text-box">
        <h2>Mission</h2>
        <ul>
            <li>Equip students with the necessary technological and intellectual capacity to face the fast changing demands of modern technology;</li>
            <li>Develop the ideal working attitudes and values of the students;</li>
            <li>Engage in research studies for innovative development of the school;</li>
            <li>Provide industry-driven curricular programs;</li>
            <li>Enhance the intellectual, moral and spiritual standard of the faculty and staff;</li>
            <li>Maintain the quality of its learning facilities at par with that of industry;</li>
            <li>Sustain efforts towards effective administration; and</li>
            <li>Strengthen linkages with the private and public sectors.</li>
        </ul>
    </div>

    <div class="text-box">
        <h2>Goals</h2>
        <ul>
            <li>Produce employable, productive and globally competitive graduates.</li>
            <li>Engage in research works to determine the needs of industries in the preparation of new curricular offerings and for employment purposes.</li>
            <li>Augment impact programs to the existing curriculum.</li>
            <li>Attract and retain highly qualified educators in different areas of disciplines.</li>
            <li>Increase service operation of its present learning facilities.</li>
            <li>Create and maintain an administrative system that is efficient and responsive to the needs of the institution.</li>
            <li>Develop strong linkages with the industrial sectors, other educational institutions and Local Government Units to ensure the high quality of training.</li>
        </ul>
    </div>
</section>

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <img src="https://raw.githubusercontent.com/shanerumi/milachan/refs/heads/main/LOGO-e1733733724127-297x300.png" class="footer-logo">
        </div>
        <div class="footer-column">
            <h3>Social Links</h3>
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=61571900730175">Facebook</a></li>
                <li><a href="https://www.youtube.com/@bulacanpolytechniccollege">Youtube</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <ul>
                <li>📍 Bulihan, City of Malolos, Bulacan</li>
                <li>📞 (044) 802 6716</li>
                <li>✉ communications@bpc.edu.ph</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024 Bulacan Polytechnic College. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
