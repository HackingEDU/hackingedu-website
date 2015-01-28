var EmailConfirm = (function() {
  var _API_KEY = 'CyLOW4SMVFmpniI3Ni8XdA';
  var _contacts = {
    NOREPLY: {name: 'HackingEDU', email: 'noreply@hackingedu.com', type: 'from'},
    BLAKE: {name: 'Blake', email: 'blake@hackingedu.co', type: 'bcc'},
    ALEX: {name: 'Alex Cory', email: 'alex@hackingedu.co', type: 'bcc'},
    JACKIE: {name: 'Jackie Zhang', email: 'Jackie@hackingedu.co', type: 'bcc'},
    KIRILL: {name: 'Kirill Satanovsky', email: 'kirill@hackingedu.co', type: 'bcc'}
  };

  var _subjects = {
    GENERIC: 'HackingEDU sign-up confirmation',
    HACKER: 'HackingEDU Hacker sign-up confirmation',
    SPONSOR: 'HackingEDU sponsorship sign-up confirmation',
    VOLUNTEER: 'HackingEDU volunteer sign-up confirmation'
  };

  var _attachments = {
    sponsor_letter: {FILE: '../../email_attachments/sponsor/_SponsorshipLetter.txt', content: ''}
  };

  var _defaultData = {
    key: '',
    template_name: null,
    template_content: [],
    message: {
        html: null,
        text: 'Testing',
        subject: 'Hacking EDU sign-up confirmation',
        from_email: 'noreply@hackingedu.com',
        from_name: 'Hacking EDU',
        to: [
            {
                email: '',
                name: '',
                type: 'to'
            }
        ],
        headers: {},
        important: false,
        track_opens: null,
        track_clicks: null,
        auto_text: null,
        auto_html: null,
        inline_css: null,
        url_strip_qs: null,
        preserve_recipients: null,
        view_content_link: null,
        bcc_address: null,
        tracking_domain: null,
        signing_domain: null,
        return_path_domain: null,
        merge: true,
        merge_language: 'mailchimp',
        global_merge_vars: [],
        merge_vars: [],
        tags: [
          'signup-confirmation'
        ],
        subaccount: null,
        google_analytics_domains: [],
        google_analytics_campaign: null,
        metadata: {
           website: 'hackingedu.co'
        },
        recipient_metadata: [],
        attachments: [],
        images: []
      },
      async: false,
  };

  var _sendMail = function(data) {
    $.ajax('https://mandrillapp.com/api/1.0/messages/send-template.json', {
      type: 'POST',
      dataType: 'json',
      data: data,
      error: function(jqXHR, textStatus, errorThrown) {
        //alert(jqXHR.responseText);
        //console.log(textStatus+': '+errorThrown);
      },
      success: function(dataReturned, textStatus, jqXHR) {
        //alert(jqXHR.responseText);
        //console.log(textStatus+': '+dataReturned);
      }
    });
  }

  return {
    hacker: function(data) {
      /*form data:
      biz or tech?, name, email, major, school, gender,
      grade, firstHackathon, githubUsername, linkedinUrl,
      shirtSize, reimbursement, idea description
      */


      _defaultData.key = _API_KEY;
      _defaultData.template_name = 'hacker_test';
      _defaultData.message.subject = _subjects.HACKER;
      _defaultData.message.to[0].email = data.email;
      _defaultData.message.to[0].name = data.name;
      _defaultData.message.merge_vars[0].rcpt = data.email;
      _defaultData.message.merge_vars.push({
        rcpt: data.email,
        vars: [
          {
            name: '*|FNAME|*',
            content: data.name
          }
        ]
      });

      _sendMail(JSON.stringify(_defaultData));
    },

    sponsor: function(data) {
      //form data: sponsorName, contactName, email, phone, level

      //load email attachments from file
      $.ajax(_attachments.sponsor_letter.FILE, {
        type: 'GET',
        dataType: 'text',
        error: function(jqXHR, textStatus, errorThrown) {
          //alert(jqXHR.responseText);
        },
        success: function(dataReturned, textStatus, jqXHR) {
          _attachments.sponsor_letter.content = dataReturned;
          _defaultData.key = _API_KEY;
          _defaultData.template_name = 'sponsor_test';

          _defaultData.message.subject = _subjects.SPONSOR;
          _defaultData.message.from_email = _contacts.ALEX.email;
          _defaultData.message.from_name = _contacts.ALEX.name;

          _defaultData.message.to.push(_contacts.KIRILL);
          _defaultData.message.to.push(_contacts.BLAKE);
          _defaultData.message.to.push(_contacts.JACKIE);
          _defaultData.message.to[0].email = data.email;
          _defaultData.message.to[0].name = data.contactName;
          _defaultData.message.merge_vars = [
            {
              rcpt: data.email,
              vars: [
                {
                  name: '*|FNAME|*',
                  content: data.name
                }
              ]
            }
          ];

          _defaultData.message.attachments.push({
            type: 'application/pdf',
            name: 'SponsorshipLetter.pdf',
            content: _attachments.sponsor_letter.content
          });

          _sendMail(JSON.stringify(_defaultData));
        }
      });
    },

    volunteer: function(data) {
      //form data: name, email, mentor, shirtSize, company, school
      _defaultData.key = _API_KEY;

      _defaultData.template_name = 'volunteer_test';
      _defaultData.message.subject = _subjects.VOLUNTEER;
      _defaultData.message.to[0].email = data.email;
      _defaultData.message.to[0].name = data.name;
      _defaultData.message.merge_vars[0].rcpt = data.email;
      _sendMail(JSON.stringify(_defaultData));
    }
  };
})();
