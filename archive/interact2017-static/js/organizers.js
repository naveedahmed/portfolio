$(document).ready(function () {
    var source = $("#org-block").html();
    //    var source2 = $("#org-nav").html();
    var template = Handlebars.compile(source);
    //    var template2 = Handlebars.compile(source2);
    var context = {
        orgSet: [
            {
                orgSetId: "gencon",
                orgSetName: "General",
                email: "generalchair[at]interact2017[dot]org",
                person: [{
                    organizer: "Anirudha Joshi",
                    position: "IIT Bombay, India",
                    photo: "anirudha_joshi.jpg",
                }, {
                    organizer: "Girish Dalvi",
                    position: "IIT Bombay, India",
                    photo: "girish_dalvi.jpg",
                }]
            },
            {
                orgSetId: "fullpc",
                orgSetName: "Full Papers",
                email: "fullpapers[at]interact2017[dot]org",
                person: [{
                    organizer: "Regina Bernhaupt",
                    position: "Ruwido, France",
                    photo: "regina_bernhaupt.jpg",
                }, {
                    organizer: "Jacki O’Neill",
                    position: "Microsoft Research, India",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "wsc",
                orgSetName: "Workshops",
                email: "workshops[at]interact2017[dot]org",
                person: [{
                    organizer: "Torkil Clemmensen",
                    position: "Copenhagen Business School, Denmark",
                    photo: "torkil_clemmensen.jpg",
                }, {
                    organizer: "Rajamanickam Venkatesh",
                    position: "IIT Bombay, India",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "ft",
                orgSetName: "Field Trips",
                email: "fieldtrips[at]interact2017[dot]org",
                person: [{
                    organizer: "Nimmi Rangaswamy",
                    position: "Xerox, India",
                    photo: "nimmi_rangaswamy.jpg",
                }, {
                    organizer: "Jose Abdelnour Nocera",
                    position: "University of West London, UK",
                    photo: "jose_abdelnour-nocera.jpg",
                }, {
                    organizer: "Debjani Roy",
                    position: "MSU Baroda, India",
                    photo: "debjani_roy.jpg",
                }]
            },
            {
                orgSetId: "shp",
                orgSetName: "Short Papers",
                email: "shortpapers[at]interact2017[dot]org",
                person: [{
                    organizer: "Peter Forbrig",
                    position: "University of Rostock, Germany",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Sriganesh Madhvanath",
                    position: "PARC, USA",
                    photo: "sriganesh_madhvanath.jpg",
                }]
            },
            {
                orgSetId: "demo",
                orgSetName: "Demonstrations",
                email: "demos[at]interact2017[dot]org",
                LOC: "*LOC - Local Organizing Chair",
                person: [{
                    organizer: "Takahiro Miura",
                    position: "University of Tokyo, Japan",
                    photo: "takahiro_miura.jpg",
                }, {
                    organizer: "Shengdong Zhao",
                    position: "National University of Singapore, Singapore",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Manjiri Joshi (LOC)*",
                    position: "IIT Bombay, India",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "poster",
                orgSetName: "Posters",
                email: "posters[at]interact2017[dot]org",
                person: [{
                    organizer: "Girish Prabhu",
                    position: "Srishti Labs, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Zhengjie Liu",
                    position: "Dalian Maritime University, China",
                    photo: "zhengjie_liu.jpg",
                }]
            },
            {
                orgSetId: "doccon",
                orgSetName: "Doctoral Consortium",
                email: "docconsortium[at]interact2017[dot]org",
                person: [{
                    organizer: "Paula Kotze",
                    position: "CSIR Meraka Institute, South Africa",
                    photo: "paula_kotze.jpg",
                }, {
                    organizer: "Pedro Campos",
                    position: "Madeira Interactive Technologies Institute, Portugal",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "src",
                orgSetName: "Student Research Consortium",
                email: "srconsortium[at]interact2017[dot]org",
                person: [{
                    organizer: "Indrani Medhi Thies",
                    position: "Microsoft, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Naveen Bagalkot",
                    position: "Srishti Labs, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Janet Wesson",
                    position: "Nelson Mandela Metropolitan University, South Africa",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "sdc",
                orgSetName: "Student Design Consortium",
                email: "sdconsortium[at]interact2017[dot]org",
                person: [{
                    organizer: "Abhishek Shrivastava",
                    position: "IIT Guwahati, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Prashant Sachan",
                    position: "Microsoft, India",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "install",
                orgSetName: "Installations",
                email: "installations[at]interact2017[dot]org",
                LOC: "*LOC - Local Organizing Chair",
                person: [{
                    organizer: "Ishneet Grover",
                    position: "Samsung, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Jayesh Pillai",
                    position: "IIT Bombay, India",
                    photo: "jayesh_pillai.jpg",
                }, {
                    organizer: "Nagraj Emmady (LOC)*",
                    position: "IIT Bombay, India",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "tucou",
                orgSetName: "Courses",
                email: "courses[at]interact2017[dot]org",
                person: [{
                    organizer: "Gerrit van der Veer",
                    position: "TBA",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Dhaval Vyas",
                    position: "Queensland University of Technology, Australia",
                    photo: "dhaval_vyas.jpg",
                }]
            },
            {
                orgSetId: "castu",
                orgSetName: "Case Studies",
                email: "casestudies[at]interact2017[dot]org",
                person: [{
                    organizer: "Ravi Poovaiah",
                    position: "IIT Bombay, India",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Elizabeth Churchill",
                    position: "Google, USA",
                    photo: "elizabeth_churchill.jpg",
                }]
            },
            {
                orgSetId: "indprez",
                orgSetName: "Industry Presentations",
                email: "industry[at]interact2017[dot]org",
                person: [{
                    organizer: "Suresh Chande",
                    position: "Microsoft, Finland",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Fernando Loizides",
                    position: "University of Wolverhampton, UK",
                    photo: "fernando_loizides.jpg",
                }]
            },
            {
                orgSetId: "panel",
                orgSetName: "Panels",
                email: "panels[at]interact2017[dot]org",
                person: [{
                    organizer: "Antonella De Angeli",
                    position: "University of Trento, Italy",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Rosa Arriaga",
                    position: "Georgia Tech, USA",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "tpp",
                orgSetName: "Technical Program & Proceedings",
                person: [{
                    organizer: "Marco Winkler",
                    position: "IRIT, France",
                    photo: "pattern_1_trans.png",
                }, {
                    organizer: "Devanuj",
                    position: "TBA",
                    photo: "pattern_1_trans.png",
                }]
            },
            {
                orgSetId: "websoc",
                orgSetName: "Web & Social Media",
                email: "webchair[at]interact2017[dot]org",
                person: [{
                    organizer: "Naveed Ahmed",
                    position: "Adobe Systems, India",
                    photo: "naveed_ahmed.jpg",
                }]
            },
            {
                orgSetId: "sv",
                orgSetName: "Student Volunteers",
                email: "volunteers[at]interact2017[dot]org",
                person: [{
                    organizer: "Rasagy Sharma",
                    position: "Barclays, India",
                    photo: "pattern_1_trans.png",
                }]
            }
        ]
    };
    var output = template(context);
    //    var output2 = template2(context);
    $("#org-list").html(output);
    //    $("#org-nav-list").html(output2);
});