import Router from './Router'

import Home from "../views/Home";
import Search from "../views/Search";
import Faqs from "../views/Faqs";
import Full from "../views/Search/results/full_description";
import About from "../views/About";
import Question from "../views/Faqs/question";
import Services from "../views/Services";
import Instructor from "../views/Instructor";

import RCP from "../views/RCP";
import ILP from "../views/RCP/ILP";
import ITR from "../views/RCP/ITR";
import OAER from "../views/RCP/OAER";

export default [
{
    path:'/about',
    component: About,
    name:'about',
    meta:{
        footer:true
    }
},
{
    path:'/services',
    component: Services,
    name:'services',
    meta:{
        footer:true
    }
},
{
    path:'/instructor',
    component: Instructor,
    name:'instructor_support',
    meta:{
        footer:true
    }
},
{
    path: '/',
    component: Home,
    name: 'home',
    meta:{
        footer:true
    }
},
{
    path:'/search',
    component:Search,
    name:'search'
},
{
    path:'/full',
    component:Full
},
{
    path:'/faqs',
    component: Faqs,
    name:'faqs',
    props:true
},
{
    path:'/question',
    component: Question,
    name:'question'
},
{
    path:'/research_consultations',
    component: Router,
    name:'research_consultations',
    redirect:{name:'rcp_home'},
    children:[
    {
        path:'',
        name:'rcp_home',
        component:RCP,
        meta:{
            footer:true
        }
    },
    {
        path:'info_lit_program',
        name:'ilp',
        component:ILP,
        meta:{
            footer:true
        }
    },
    {
        path:'intro_to_research',
        name:'itr',
        component:ITR,
        meta:{
            footer:true
        }
    },
    {
        path:'o_a_e_r',
        name:'oaer',
        component:OAER,
        meta:{
            footer:true
        }
    }
    ]
},
{
    path:'*',
    redirect:{name:'home'}
},
];
