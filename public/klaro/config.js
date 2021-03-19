window.klaroConfig = {
    elementID: 'consent',
    storageName: 'consent-data',
    acceptAll: true,
    mustConsent: false,
    hideDeclineAll: true,
    htmlTexts: true,
    translations: {
        en: {            
            consentNotice: {
            description: 'Hi! Could we please enable some additional services for <b>Marketing COOKIES</b>? You can always change or withdraw your consent later.',
            },
            consentModal: {
                title: 'Services that LARAVEL app would like to use:',
                description:'Here you can assess and customize the services that we would like to use on this website. You are in charge! Enable or disable services as you see fit.',
            },
            purposes: {
                marketing: {
                    title: 'Marketing COOKIES',
                    description:
                        'Here you can assess and customize marketing cookies.',
                },
                required: {
                    title: 'Required DATA',
                    description:'This data is a MUST for the app to be able to work properly.',
                }
            }
        }
    },
    services: [{
            purposes: ['marketing'],
            name: "google analytics",
            default: true,
        },
        {
            purposes: ['required'],
            name: "session",
            required: true,
            optOut: true,
            translations:{
                en:{
                    title: 'Session Data',
                    description: 'This options allows the site to work with session data.'
                }
            }
            
        },
        {
            purposes: ['required'],
            name: "cookies",
            required: true,
            optOut: true,
            translations:{
                en:{
                    title: 'Necessary Cookies',
                    description: 'This options allows the site to work with necessary cookies data.'
                }
            }
            
        }
        
    ],

}