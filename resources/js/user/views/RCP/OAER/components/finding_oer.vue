<template>
    <div class="padding">
        <div class="text_title pt-5">
            FINDING OERS
        </div>
        <div class="row">
            <div class="col py-5">
                <div class="col p-2" v-for="(link,index) in links" :key="index">
                    <div class="font-weight-bold red_box p-2">{{link.text}}</div>
                    <div class="borderr mt--05 px-3" >
                        <div class="transition hidden text-uppercase" :class="{'shown':link.shown} ">
                            <p class="text-center font-weight-bold p-2">{{link.text}}</p>
                            <div class="row pl-3 pr-3 font-weight-bold">
                                <div class="col borderr text-center"><p>{{link.r1c1}}</p></div>
                                <div class="col borderr">{{link.r1c2}}</div>
                            </div>
                            <div class="row p-3 font-weight-bold">
                                <div class="col borderr text-center"><p>{{link.r2c1}}</p></div>
                                <div class="col borderr">{{link.r2c2}}</div>
                            </div>
                            <div class="row pl-3 pr-3 font-weight-bold">
                                <div class="col borderr text-center"><p>{{link.r3c1}}</p></div>
                                <div class="col borderr">{{link.r3c2}}</div>
                            </div>
                            <div class="row p-3 font-weight-bold">
                                <div v-if="link.r4c1==null" class="visibility"></div>
                                <div v-else class="col borderr text-center"><p>{{link.r4c1}}</p></div>
                                <div v-if="link.r4c2==null" class="visibility"></div>
                                <div v-else class="col borderr">{{link.r4c2}}</div>
                            </div>
                            <div class="row pl-3 pr-3 font-weight-bold">
                                <div v-if="link.r5c1==null" class="visibility"></div>
                                <div v-else class="col borderr text-center"><p>{{link.r5c1}}</p></div>
                                <div v-if="link.r5c2==null" class="visibility"></div>
                                <div v-else class="col borderr">{{link.r5c2}}</div>
                            </div>
                            <div class="row p-3 font-weight-bold">
                                <div v-if="link.r6c1==null" class="visibility"></div>
                                <div v-else class="col borderr text-center"><p>{{link.r6c1}}</p></div>
                                <div v-if="link.r6c2==null" class="visibility"></div>
                                <div v-else class="col borderr">{{link.r6c2}}</div>
                            </div>
                            <div class="row pl-3 pr-3 font-weight-bold">
                                <div v-if="link.r7c1==null" class="visibility"></div>
                                <div v-else class="col borderr text-center"><p>{{link.r7c1}}</p></div>
                                <div v-if="link.r7c2==null" class="visibility"></div>
                                <div v-else class="col borderr">{{link.r7c2}}</div>
                            </div>
                            <div class="row p-3 font-weight-bold">
                                <div v-if="link.r8c1==null" class="visibility"></div>
                                <div v-else class="col borderr text-center"><p>{{link.r8c1}}</p></div>
                                <div v-if="link.r8c2==null" class="visibility"></div>
                                <div v-else class="col borderr">{{link.r8c2}}</div>
                            </div>
                            <div class="text-center">
                                <img class="img-fluid" v-bind:src="link.img">
                            </div>
                        </div>
                        <div  class="m-3 cursor-pointer row justify-content-center"  @click="show(index)">
                            <a class="btn"><p class="text-blue">Show {{link.shown ? 'less' : 'more'}}<br><img class="transition" :class="{rotate:link.shown}" v-bind:src="showmore"></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import showmore from '../../../../assets/images/showmore.png'
import google from '../../../../assets/images/Google1.png'
import youtube from '../../../../assets/images/youtube.png'
export default {
    data: function() {
        return {
            showmore,
            links: [
                {
                    shown:false,
                    text: "Open Textbook",
                    r1c1: 'Directory of Open Access Books',
                    r1c2: 'A platform which provides about 30 000 academic peer-reviewed books from almost 400 publishers on a large range of subjects.',
                    r2c1: 'OpenStax',
                    r2c2: 'one of the world’s largest nonprofit digital learning platforms and publisher of free, open education resources.',
                    r3c1: 'Open Textbook Collection',
                    r3c2: 'Textbooks in the Open Textbook Library are considered open because they are free to use and distribute, and are licensed to be freely adapted or changed with proper attribution',
                    r4c1: 'Open SUNY Textbooks',
                    r4c2: 'A catalog of open textbooks authored and peer-reviewed by SUNY faculty and staff.',
                    r5c1: 'BCampus OpenEd',
                    r5c2: 'Open Textbook Collection come in multiple formats. Many can be read online or delivered via PDF, EPUB (for most e-readers) and MOBI (for Kindle) format for free, or can be printed via our print-on-demand service for a nominal fee.',
                    r6c1: 'Open Textbook Library',
                    r6c2: 'Catalog of peer-reviewed OER textbooks',
                    r7c1: 'MERLOT Open Textbooks',
                    r7c2: 'Textbooks specifically designated for free use. MERLOT also has tutorials, lesson plans, and other educational resources.',
                    r8c1: null,
                    r8c2: null,
                },
                {
                    shown:false,
                    text: "Open Books",
                    r1c1: 'Project Guttenberg',
                    r1c2: 'A library of over 60,000 free eBooks, available for downloading or reading online.',
                    r2c1: 'Project Muse',
                    r2c2: 'Access to over 600 open access (OA) books from several distinguished university presses and scholarly societies.',
                    r3c1: 'HathiTrust Digital Library',
                    r3c2: 'Offering a collection of millions of titles digitized from libraries around the world.',
                    r4c1: 'JSTOR Open Access Books',
                    r4c2: 'More than 6,500 Open Access ebooks from 90 publishers, including Brill, Cornell University Press, De Gruyter, and University of California Press, are now available at no cost to libraries or users.',
                    r5c1: 'LA TROBE eBUREAU',
                    r5c2: 'The La Trobe eBureau publishes engaging, high quality, open-access ebooks. The mission of the eBureau is to invest in the development of quality open access resources to support online and blended learning.',
                    r6c1: 'Stanford Encyclopedia of Philosophy',
                    r6c2: 'The Stanford Encyclopedia of Philosophy organizes scholars from around the world in philosophy and related disciplines to create and maintain an up-to-date reference work.',
                    r7c1: null,
                    r7c2: null,
                    r8c1: null,
                    r8c2: null,
                },
                {
                    shown:false,
                    text: "Open Journals",
                    r1c1: 'Directory of open access journals',
                    r1c2: '"The DOAJ is a community-curated online directory that indexes and provides access to high quality, open access, peer-reviewed journals." (DOAJ). The website enables users to search and find Open Access journals and articles which you the user can then download from the site of the publisher. All journals and articles on DOAJ have a full open access licence, making them "free to share". You can link content found through the DOAJ to your module is online reading list. Search the DOAJ using the box above.',
                    r2c1: 'Digital Commons Network',
                    r2c2: 'The Digital Commons Network brings together free, full-text scholarly articles from hundreds of universities and colleges worldwide. This portal provides access to to content produced and stored using bepress’s widely used Digital Commons publishing and institutional repository platform. the interface allows you to explore by subject area.',
                    r3c1: 'OER Commons',
                    r3c2: 'OER Commpns is a public digital library of open educational resources. explore, create, and collaborate with educators around the world to improve curriculum',
                    r4c1: null,
                    r4c2: null,
                    r5c1: null,
                    r5c2: null,
                    r7c1: null,
                    r7c2: null,
                    r8c1: null,
                    r8c2: null,
                    r6c1: null,
                    r6c2: null,
                    img: google,
                },
                {
                    shown:false,
                    text: "Open Data & Statistics",
                    r1c1: 'UNdata',
                    r1c2: 'Data from many UN organizations.',
                    r2c1: 'WomenStats - International',
                    r2c2: 'Create a free account to search and download statistics on a wide variety of issues related to women',
                    r3c1: 'GapMinder',
                    r3c2: 'Social, economic, and environmental data from around the world',
                    r4c1: 'CIA World FactBook',
                    r4c2: 'The World Factbook provides basic intelligence on the history, people, government, economy, energy, geography, communications, transportation, military, terrorism, and transnational issues for 266 world entities.',
                    r5c1: 'JSTOR "Data For Research"',
                    r5c2: 'Define and request datasets for content on JSTOR, or download a sample dataset for teaching text mining techniques.',
                    r6c1: 're3data',
                    r6c2: 'A searchable collection of research data repositories. DOIs available for citing datasets.',
                    r7c1: 'Yahoo WebScope',
                    r7c2: 'The Yahoo Webscope Program is a reference library of interesting and scientifically useful datasets for non-commercial use by academics and other scientists.',
                    r8c1: null,
                    r8c2: null,
                },
                {
                    shown:false,
                    text: "Open Teaching & Learning",
                    r1c1: 'Future Learn',
                    r1c2: 'Learn 100% online with world class universities and industry experts. Develop hobbies, new skills and career-changing expertise with our flexible courses.',
                    r2c1: 'OpenLearn',
                    r2c2: 'Free Learning from The Open University',
                    r3c1: 'Google Arts & Culture',
                    r3c2: 'Google Arts & Culture is a non-profit initiative. We work with cultural institutions and artists around the world. Together, our mission is to preserve and bring the world’s art and culture online so it’s accessible to anyone, anywhere.',
                    r4c1: 'University of Oxford Department of Education Public Seminars',
                    r4c2: 'Public seminars from the Department of Education.',
                    r5c1: 'MIT OpenCourseware',
                    r5c2: '"MIT OpenCourseWare (OCW) is a web-based publication of virtually all MIT course content. OCW is open and available to the world and is a permanent MIT activity."',
                    r6c1: 'Khan Academy',
                    r6c2: '"Khan Academy offers practice exercises, instructional videos, and a personalized learning dashboard that empower learners to study at their own pace in and outside of the classroom. We tackle math, science, computer programming, history, art history, economics, and more. Our math missions guide learners from kindergarten to calculus using state-of-the-art, adaptive technology that identifies strengths and learning gaps."',
                    r7c1: 'TedEd',
                    r7c2: 'Free Lesson Plans and Projects',
                    r8c1: 'Open Yale Courses',
                    r8c2: 'Open Yale Courses provides free and open access to a selection of introductory courses taught by distinguished teachers and scholars at Yale University. The aim of the project is to expand access to educational materials for all who wish to learn.',
                },
                {
                    shown:false,
                    text: "Open Images and Videos",
                    r1c1: 'Creative Commons Image Search',
                    r1c2: 'Allows you to search for CC content through various image search browsers',
                    r2c1: 'EveryStockPhoto..',
                    r2c2: 'A search engine for free photos which come from many sources. You can view the attribution license to determine under what conditions each photo can be used.',
                    r3c1: 'LibreStock',
                    r3c2: 'Over 25,000 CC0-Licensed photos that have been scanned and indexed from top stock sites.',
                    r4c1: 'Library of Congress',
                    r4c2: 'American Memory, Prints & Photographs, Maps, Film, National Jukebox, and many more digital collections.',
                    r5c1: 'TEDTalks',
                    r5c2: 'The most of the TED talks videos are licensed under Creative Commons, and can be used for personal/educational purposes.',
                    r6c1: 'YouTube',
                    r6c2: 'Use videos licenced under creative commons licence, do a search by keyword and filter accordingly',
                    r7c1: null,
                    r7c2: null,
                    r8c1: null,
                    r8c2: null,
                    img: youtube
                }
            ]
        }
    },
    methods:{
        show(index){
            this.links[index].shown=!this.links[index].shown;
        }
    }
    
};
</script>

<style scoped>
.mt--05{
    border-top: transparent !important;
    margin-right:1em;
    margin-left:1em;
}
p{
    margin-bottom:0!important;
}
.borderr {
    border: 1px solid black;
}
.hidden{
    max-height:0px;
    overflow:hidden;
}
.shown{
    max-height:1000px;
}
.visibility{
    visibility: hidden;
    border: none;
}
</style>
