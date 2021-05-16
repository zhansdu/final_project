// User settings
import FAQ from '../views/Settings/Faq'
import chat from '../views/Settings/Chat'
import Events from '../views/Settings/Events'
import Questions from '../views/Settings/Questions'

// router
import Router from './Router'
import Settings from '../views/Settings'
export default
[
{
    path: '/',
    redirect:{name:'settings'}
},
{
    path:'/settings',
    name:'settings',
    redirect:'settings/faq',
    component:Settings,
    children:[
    {
        path:'faq',
        name:'faq',
        component:FAQ
    },
    {
        path:'chat',
        name:'chat',
        component:chat
    },
    {
        path:'events',
        name:'events',
        component:Events
    },
    {
        path:'questions',
        name: 'questions',
        component:Questions
    }
    ]
},
{
    path:'*',
    redirect:'/'
}
];
