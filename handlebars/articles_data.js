// Reference for this page
// http://jsfiddle.net/q43vmtaj/3/

var data = {
    articleItems: [
        {
            articleTitle: "The Nuances of Enterprise UX Design",
            articleURL: "https://medium.com/design-bootcamp/the-nuances-of-enterprise-ux-design-4140bdb8ccab",
            desc: "An 11-part series exploring the various aspects and intricacies of UX design for enterprise software.",
            articleImage: "img/articles/nuances_of_ux.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Designing Enterprise UX for All",
            articleURL: "https://medium.com/design-bootcamp/designing-enterprise-ux-for-all-93b654035500",
            desc: "ABC.",
            articleImage: "img/articles/for-all.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Enterprise UX and the value of integration",
            articleURL: "https://medium.com/design-bootcamp/enterprise-ux-and-the-value-of-integration-d285ca82bbe1",
            desc: "ABC.",
            articleImage: "img/articles/integration.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        }, {
            articleTitle: "Dogfooding for Better UX and Product Quality",
            articleURL: "https://medium.com/design-bootcamp/dogfooding-for-better-ux-and-product-quality-480ce3a2f9b0",
            desc: "ABC.",
            articleImage: "img/articles/dogfooding.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        }, {
            articleTitle: "Less is more; not necessarily in Enterprise UX.",
            articleURL: "https://medium.com/design-bootcamp/less-is-more-not-necessarily-in-enterprise-ux-0e5e27e73ef5",
            desc: "ABC.",
            articleImage: "img/articles/less-more.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        }, {
            articleTitle: "Enterprise users are human too",
            articleURL: "https://medium.com/design-bootcamp/enterprise-users-are-human-too-a71abe362e44",
            desc: "ABC.",
            articleImage: "img/articles/human-too.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Enterprise UX: Understanding user behaviour and adoption",
            articleURL: "https://medium.com/design-bootcamp/understanding-user-behaviour-and-adoption-e62f3d085cea",
            desc: "ABC.",
            articleImage: "img/articles/user-adoption.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "The Curious Case of Modern Car Design",
            articleURL: "https://medium.com/@naveedahmed/the-curious-case-of-modern-car-design-8737b1943c09",
            desc: "ABC.",
            articleImage: "img/articles/car-design.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Enterprise UX and the role of domain knowledge",
            articleURL: "https://medium.com/design-bootcamp/enterprise-ux-and-the-role-of-domain-knowledge-0df87b8485c9",
            desc: "ABC.",
            articleImage: "img/articles/domain.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Enterprise UX: Opportunities and challenges of scale",
            articleURL: "https://medium.com/design-bootcamp/opportunities-and-challenges-of-scale-a15872c91935",
            desc: "ABC.",
            articleImage: "img/articles/scale.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Enterprise UX: Dichotomy of end-users and customers",
            articleURL: "https://medium.com/design-bootcamp/dichotomy-of-end-users-and-customers-fe390328c1d6",
            desc: "ABC",
            articleImage: "img/articles/dichotomy.jpg",
            tags: "<li>Medium Article</li><li>UX Design</li>"
        },
        {
            articleTitle: "Designing for Enterprises",
            articleURL: "https://youtu.be/MzlX4uPScrw",
            desc: "My talk examining the nuances of designing enterprise products and how the process is different when compared to consumer products.",
            articleImage: "img/articles/karsten-winegeart-GQwrgMgJDhk-unsplash.jpg",
            tags: "<li>Design Talk</li><li>Enterprise</li>"
        },
        {
            articleTitle: "Wayfinding Behavior in India",
            articleURL: "https://doi.org/10.1007/978-3-319-22668-2_40",
            desc: "Research publication on wayfinding habits in India, the way people use landmarks and how certain cultural aspects affect wayfinding.",
            articleImage: "img/articles/asking_directions.jpg",
            tags: "<li>Research</li><li>Publication</li>"
        },
        {
            articleTitle: "Low-code features in Microsofts Lists",
            articleURL: "https://youtu.be/MR9dVOTKU6E",
            desc: "Product demo from April 2021, as part of the Microsoft 365 (M365) Dev SIG Call for the M365 Community.",
            articleImage: "img/articles/microsoft_lists.png",
            tags: "<li>Product demo</li><li>Microsoft</li><li>SharePoint</li>"
        },

        {
            articleTitle: "Design Documentation (Weekly Design Jam)",
            articleURL: "https://twitter.com/thedesignradio/status/1497232421179498497?s=20&t=1T4ljwdUpPymRoS-nGJHEg",
            articleImage: "img/articles/twitter_brand.jpg",
            tags: "<li>Discussion</li><li>Twitter Spaces</li>"
        },
        {
            articleTitle: "Design Portfolios (Weekly Design Jam)",
            articleURL: "https://twitter.com/thedesignradio/status/1495058347649040384?s=20&t=Rj21XWMeMRHOGE2APwf5Vw",
            articleImage: "img/articles/twitter_brand.jpg",
            tags: "<li>Discussion</li><li>Twitter Spaces</li>"
        },
        {
            articleTitle: "Design Job Interviews 101 (Weekly Design Jam)",
            articleURL: "https://twitter.com/thedesignradio/status/1492521770519527427?s=20&t=8sw66Q7oGjk5EL6RdJbK9Q",
            articleImage: "img/articles/twitter_brand.jpg",
            tags: "<li>Discussion</li><li>Twitter Spaces</li>"
        },
        {
            articleTitle: "UX Career Challenges (Weekly Design Jam)",
            articleURL: "https://twitter.com/thedesignradio/status/1489984620397731841?s=20&t=8qi61VPaPIyMGggnj6R_dQ",
            articleImage: "img/articles/twitter_brand.jpg",
            tags: "<li>Discussion</li><li>Twitter Spaces</li>"
        }
    ]
};