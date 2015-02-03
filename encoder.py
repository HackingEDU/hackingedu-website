import base64

files = [
    {
      'original': './email_attachments/sponsor/HackingEDUSponsorshipPackages2015.pdf',
      'encoded': './email_attachments/sponsor/_HackingEDUSponsorshipPackages2015.txt'
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
