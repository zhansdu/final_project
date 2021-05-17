<template>
    <div class="padding">
        <div class="text_title pt-5">
            SESSION 1: UNDERSTANDING & SEARCHING THE INFORMATION
        </div>
        <section id="s1" class="pt-5">
            <div class="red_box">
               Course Objectives:
            </div>
            <div class="p-5 font-weight-bold">
                <ul>
                    <li>Information and It's Creation</li>
                    <li>Information Sources & Types</li>
                    <li>Where to find information</li>
                    <li>Library Website and Databases</li>
                    <li>Search Strategies and Keyword Building</li>
                </ul>
            </div>
        </section>
        <section id="s2" class="pt-5">
            <div class="red_box">
               Types of Information
            </div>
            <div class="col">
                <div class="row" v-for="(link,index) in links" :key="index">
                    <div class="col m-2" v-for="(link,index) in link.links" :key="index">
                        <div class="col font-weight-bold">
                            <div class="col align-items-center p-2">
                                <div class="text-center row p-2 borderr bg-grey">
                                    <p>{{link.title}}</p>
                                </div>
                                <div class="row p-2 borderr">
                                    <p>{{link.text}}</p>
                                </div>  
                            </div>                                                  
                        </div>
                    </div>
                </div>
                <div class="row p-5 text-uppercase">
                    <a class="cursor-pointer font-weight-bold" href="https://www.pcc.edu/library/scripts/know-your-sources/index.html">A Guide to Understanding Resources</a>
                    <a class="cursor-pointer font-weight-bold ml-auto mr-3" href="https://wiki.ubc.ca/Library:Scholarly_versus_Popular_Sources/Quick_Reference?action=render">Quick Reference Chart - Types of sources</a>
                </div>
            </div>
        </section>
        <section id="s3" class="pt-5">
            <div class="row">
                <div class="col">
                    <div class="red_box">
                        Distinguish Your Source
                    </div>
                    <div class="text-center"><img class="img-fluid" v-bind:src="popular_scholarly"></div>
                </div>
                <div class="col">
                    <div class="red_box">
                        Information Life Cycle
                    </div>
                    <div class="text-center"><img class="img-fluid" v-bind:src="infocycle"></div>
                </div>
            </div>
        </section>
        <section id="s4" class="pt-5">
            <div class="red_box">
               Learn More About Files, Formats, & Media
            </div>
            <div class="p-5 font-weight-bold">
                <ul>
                    <li>html - all web pages are developed using HTML, although each basic page may contain links to many other types of files including graphics, java, video, etc. The file extension may be .htm or .html, for a web page.</li>
                    <li>audio - real audio, .wav, .au and .mp3 are the most common audio file types.</li>
                    <li>video - real player and shockwave are common video and multimedia viewers</li>
                    <li>graphics - .PDF, .GIF, .JPG, and animated GIF files are the most common types of graphics files on the Web.</li>
                    <li>text - many types of word processing files, spreadsheets, databases, and hypertext can be seen on the Web or easily translated to HTML.</li>
                    <li>Common text file types include</li>
                    <li>.txt - for plain ascii text files that can be used in any word processor or read in a Web browser.</li>
                    <li>doc for Microsoft Word files</li>
                    <li>.wpd for Word Perfect files</li>
                    <li>.pdf for Adobe Acrobat files usually viewed on the Web with the Acrobat reader, these are really graphic representations of text</li>
                    <li>other Internet Protocols - Many other resources using protocols other than http may all be retrieved via a Web browser</li>
                </ul>
                <p>Source: <a href="https://libguides.umflint.edu/idinfosources/fileformats">https://libguides.umflint.edu/idinfosources/fileformats</a></p>
            </div>
        </section>
        <section id="s5">
            <div class="pt-3">
                <carousel-3d :controlsVisible="true" height="700" width="430" @after-slide-change="(num)=>{current_slide=num}">
                    <slide class="transition" :class="{'bg-white':current_slide==index}" v-for="(member,index) in staff" :key="index" :index="index">
                        <div class="d-flex flex-column align-items-center">
                            <div class="my-3 font-weight-bold">
                                {{member.title}}
                            </div>
                            <div class="pl-5 pr-5 pb-5">
                                {{member.text}}
                                <ul>
                                    <li>{{member.li1}}</li>
                                    <li>{{member.li2}}</li>
                                    <li>{{member.li3}}</li>
                                    <li>{{member.li4}}</li>
                                    <li>{{member.li5}}</li>
                                    <li v-if="member.li6==null" class="visibility"></li>
                                    <li v-else>{{member.li6}}</li>
                                    <li v-if="member.li7==null" class="visibility"></li>
                                    <li v-else>{{member.li7}}</li>
                                    <li v-if="member.li8==null" class="visibility"></li>
                                    <li v-else>{{member.li8}}</li>
                                    <li v-if="member.li9==null" class="visibility"></li>
                                    <li v-else>{{member.li9}}</li>
                                </ul>
                            </div>
                            <div class="row pl-5">
                                <div class="col-md-2"><img v-bind:src="pdf"></div>
                                <div class="col-md-8">
                                    <div class="row"><a class="cursor-pointer" :href="member.link" target="_blank">{{member.pdftitle}}</a></div>
                                    <div class="row">{{member.pdftext}}</div>
                                </div>
                            </div>
                        </div>
                    </slide>
                </carousel-3d>
            </div>
        </section>
        <section id="s6">
            <div class="text_title pt-5">
                QUIZ
            </div>
            <div class="text-center font-weight-bold pt-5"><a class="cursor-pointer" href="https://docs.google.com/forms/d/e/1FAIpQLSeBcIvro477VW0fkWZ8Y9imDJXM_OMYd4XMVy-EhmgBH5uJag/viewform"><p class="text-uppercase">Test Questions IL #1</p></a>
            </div>
        </section>
    </div>
</template>
<script type="text/javascript">
import { Carousel3d, Slide } from 'vue-carousel-3d';
import infocycle from '../../../../assets/images/infocycle.png'
import popular_scholarly from '../../../../assets/images/popularscholarly .png'
import pdf from '../../../../assets/images/pdf.png'
export default{
        components:{Carousel3d, Slide},

		data(){
			return{
                infocycle, popular_scholarly ,
                current_slide:0, pdf,
                staff:[
                {
                    title: 'Tertiary sources',
                    text: 'Tertiary sources are based on primary and secondary sources of information and serve as key to the primary and secondary sources. Tertiary sources are usually compilation from primary or secondary sources and help the searcher to select right primary or secondary source which will be most relevant for her/his purpose. Examples of tertiary sources include:',
                    li1: 'Almanacs',
                    li2: 'Abstracts',
                    li3: 'Dictionaries',
                    li4: 'Encyclopedias',
                    li5: 'Handbooks',
                    li6: null,
                    li7: null,
                    li8: null,
                    li9: null,
                    pdftitle: 'Categories of Information Sources',
                    pdftext: 'Read and learn more on Information Sources and types. Download and check yourself',
                    link: 'https://sdu-kz.libguides.com/ld.php?content_id=33439233'
                },
                {
                    title: 'Primary sources',
                    text: 'Primary sources are original documents or original works. Primary sources are produced at the time of an event, without interpretation or commentary. Examples of primary resources include:',
                    li1: 'diaries, correspondence, ships logs',
                    li2: 'original documents e.g. birth certificates, trial transcripts',
                    li3: 'biographies, autobiographies, manuscripts',
                    li4: 'interviews, speeches, oral histories',
                    li5: 'case law, legislation, regulations, constitutions',
                    li6: 'government documents, statistical data, research reports',
                    li7: 'a journal article reporting NEW research or findings',
                    li8: 'creative art works, literature',
                    li9: 'newspaper advertisements and reportage and editorial/opinion pieces',
                    pdftitle: 'Categories of Information Sources',
                    pdftext: 'Read and learn more on Information Sources and types. Download and check yourself',
                    link: 'https://sdu-kz.libguides.com/ld.php?content_id=33439233'
                },
                {
                    title: 'Secondary sources',
                    text: 'Secondary sources are sources that interpret or analyze primary sources. Secondary sources are further removed from the events described or mentioned in primary sources. Examples of secondary sources include:',
                    li1: 'journal articles that comment on or analyse research',
                    li2: 'textbooks',
                    li3: 'dictionaries and encyclopaedias',
                    li4: 'books that interpret, analyse',
                    li5: 'political commentary',
                    li6: 'biographies',
                    li7: 'dissertations',
                    li8: 'newspaper editorial/opinion pieces',
                    li9: 'criticism of literature, art works or music',
                    pdftitle: 'Categories of Information Sources',
                    pdftext: 'Read and learn more on Information Sources and types. Download and check yourself',
                    link: 'https://sdu-kz.libguides.com/ld.php?content_id=33439233'
                },

            ],

                links:[
                    {
                        links:[
                            {
                                title: 'Academic journal',
                                text:  'A journal is a collection of articles usually written by scholars in an academic or professional field. IEEE; PLoS Biology; Nature Journals;Science, etc.',
                            },
                            {
                                title: 'Database',
                                text:  'A collection of materials with abstracts and/or full texts. Elsevier, Web of Science, Springer, Taylor & Francis, etc',
                            },
                            {
                                title: 'Newspapers',
                                text:  'A newspaper is a collection of articles about current events usually published daily/ weekly. New York Times, Egemen Qazaqstan, Kazakhstanskaya Pravda, etc',
                            },
                            {
                                title: 'Magazine',
                                text:  'A magazine is a collection of articles and images about diverse topics of popular interest and current events. National Geographic, Forbes, The Astana Times, etc.',
                            },
                            {
                                title: 'Books',
                                text:  'A composition of written text by experts of fiction and non-fiction, might be in printed or electronic format. History of Kazakhstan, Harry Potter, etc.',
                            },
                        ],
                    },
                    {
                        links:[
                            {
                                title: 'Encyclopedia',
                                text:  'Encyclopedias are collections of short, factual entries often written by different contributors who are knowledgeable about the topic. Encyclopaedia Britannica (general encyclopedia) Regulatory Fish Encyclopedia (subject encyclopedia)',
                            },
                            {
                                title: 'Web site',
                                text:  'The Website contains information beyond plain text, including sounds, images, and video accessed through the internet. Google Scholar; Yahoo; Amazon, etc.',
                            },
                            {
                                title: 'Reference Works',
                                text:  'A quick specific facts or information about any subject or area.encyclopedias, dictionaries, chronologies, handbooks, and indexes.',
                            },
                            {
                                title: 'Government Documents',
                                text:  'Publications of a local government which contains: reports, statistics, budget etc. ',
                            },
                            {
                                title: 'Grey Literature',
                                text:  '"Information produced on all levels of government, academics, business and industry in electronic and print formats not controlled by commercial publishing, i.e. where publishing is not the primary activity of the producing body"             (- ICGL Luxembourg definition, 1997-expanded in New York, 2004 )',
                            },
                        ]
                    }
                ]
			}
		}
	}
</script>
<style scoped>
    .backgroundd{
        background-color: #9F3428;
        color: #fff;
    }
    .borderr{
        border: 1px solid black;
    }
    .widthheight{
        height: 350px;
    }
    .carousel-3d-slide{
        border-radius: 5px !important;
    }
    .transition{
        transition:background-color .3s, transform 500ms ease 0s, opacity 500ms ease 0s, visibility 500ms ease 0s !important;
    }
    .visibility{
        visibility: hidden;
        border: none;
    }
</style>