# user data manifesto

“User data” means data submitted by or collected from a person
using a service on the Internet. It is not necessarily personal
data nor private data, but the origin of that data is clearly
identified to a person.

This manifesto aims at defining basic rights for people regarding
their own data in the Internet age. Roughly, we refuse feudalism:
people ought to be free and should not have to pay allegiance to
service providers. 

Thus, users should have:

1. Control over user data access

    The data that the user uploads should be under control of this
    person. Users should be able to decide whom to grant
    direct access to their data and under which permissions.

    Cryptography is necessary to achieve this.

2. Knowledge of where the data is stored

    When the data is uploaded to a specific storage provider,
    users should be able to know: where their data is stored, how
    long, in which country, and which laws apply.

    It is recommended that all users have their own server in the
    long term. Use of peer-to-peer systems and unhosted apps are a
    means to that end.

3. Right to leave a platform

    Users should always be able to extract their data at any time
    without being locked in to a specific service.

    Open standards for formats and protocols, as well as access to the
    program under a Free Software license are necessary to achieve
    this.




Notes: 

[@Okhin suggested to focus on data "created" by the user rather
than "stored." While we try to say the same things (the bits are
"created" by the user when he "stores") it does not necessarily
applies to all kinds of architectures. "To store" can be tricky to
define. So I changed it to "uploads"]

The idea is that once data leaves the private sphere to enter the
sphere of the web service, the manifesto should come into play.
But this needsto be define thorougly too. I can think of 100 cases
where data leaves my laptop. For instance let's take email. What
is "stored"? An email goes through many different points before it
gets "stored" - does that mean each point, not "storing" from a
legal sense, wouldn't be concerned with the users' privacy? No.
This is why we need to explain here that cryptography's needed to
achieve #1.

So let's take email. When I send an email:

 - I can say who should access my data (the To: and CC: fields)
 - and how (CC: / BCC:)

What's important is that I can use GPG or other cryptographic
tools to ensure that only the persons to which the data is aimed
can read the email, etc. Of course, most people don't use
cryptography, it's a problem, so ideally email providers should
use cryptography (see https://g10code.com/steed.html for
instance). On the other hand, some emails are really intended to
be public or semi-public (lists, etc.) so mandatory use of
cryptography would be a bit weird (except to sign). In any case,
use of cryptography should NEVER be denied.


One issue is #1 is what happens when data is published and then
the user wants to remove it. I think we should write something
about the fact that this right to control access to user data is
in no way an absolute right. This right is limited by other
persons' rights. So if you give a person the right to access this
data at one time, you cannot take away that right completely if
that infringes on others' rights. We might want to clarify this in
point #1.


Okhin also proposed to add:

4. Protect the data 

    User data must be protected from seizure and spying.
    Federating the data and encryption must be allowed to grant
    backup insurance and protection from eavesdropping. 

But I feel that this is redundant with previous points. Seizure
and spying is just one particular application of #1. Federation
IMHO is a means to achieve #3. Encryption is already included,
etc. But it might 

History: 

Okhin's proposal and my comments which let to the modifications
https://github.com/okhin/user-data-manifesto/commit/058283b568faa7e46cf050155089c0f235e81b74#README.md


