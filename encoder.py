import base64

#this script encodes email attachments in base64
#run this whenever any attachments are  modified or added


#if an attachment is added, include it here
files = [
    {
      'original': './email_attachments/sponsor/SponsorshipLetter.pdf',
      'encoded': './email_attachments/sponsor/_SponsorshipLetter.txt'
    }
]

for attachments in files:
    original = attachments['original']
    encoded = attachments['encoded']
    print('Reading ' + original + ' and converting to base64...')
    with open(original, 'r') as f:
        e = base64.b64encode(f.read())
        f.close()
    print('Writing encoding to ' +encoded + '...')
    with open(encoded, 'w') as f:
        f.write(e)
        f.close()

print('Done!')
