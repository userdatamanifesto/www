# user data manifesto

“User data” means any data submitted by or collected from a person
using a service on the Internet, on which a user has
power.^[For instance, the power to edit or move such data.]

This manifesto aims at defining basic rights for people regarding
their own data in the Internet age. People ought to be free and
should not have to pay allegiance to service providers. 

Thus, users should have:

1. Control over user data access

    Uploaded user data should be under the ultimate control of the
    user. Users should be able to decide whom to grant direct
    access to their data and under which permissions.[^necessity]

    Cryptography (e.g. a [PKI]) is necessary to enable
    this control.

[PKI]: https://en.wikipedia.org/wiki/PKI

2. Knowledge of how the data is stored

    When the data is uploaded to a specific service provider,
    users should be able to know where that specific service
    provider stores data, how long, in which jurisdiction the
    specific service provider operates, and which laws apply.

    It is recommended that all users have their own server in the
    long term and that users do not rely on centralised services.
    Use of peer-to-peer systems and unhosted apps are a means to
    that end.

3. Freedom to choose a platform

    Users should always be able to extract their data at any time
    without vendor lock-in.

    Open standards for formats and protocols, as well as access to the
    program under a Free Software license are necessary to achieve
    this.[^agpl]

[^agpl]: The GNU AGPL-3+ safeguards this right by making it a
legal obligation to provide access to the modified program run by
the service provider. (§ 13. Remote Network Interaction)

If users have these, they are in control of their data rather than
being subjugated by service providers. Many services that deal with
user data at the moment are gratis, but that does not mean that
they are free. Instead of paying with money, users are paying
with their allegiance to the service provider so that these
providers can exploit their data (e.g. by selling them or building
a profile for advertisers).

When users control access to the data they upload (Right #1), it
means that data intended to be privately shared should not be
accessible by the service provider, nor shared with governments.
Users should be the only ones to have ultimate control over it and
to grant access to it. Thus, a service should not force you
to disclose private data (including private correspondence) with
them. (Exceptions where the service provider asks the user to give
access to some user data  includes cases where data that is
necessary for the provider function technically.[^necessity])

[^necessity]: Services shall apply this principle in spirit.
However, we understand that in order to provide some services such
as providing email, some amount of user data needs to be accessed
by the service provider (e.g. the email metadata from:, to: etc.)
This is why Rule #2 is important.

That means the right to use cryptography[^snake-oil] should never
be denied. On the contrary, cryptography should be enabled by
default and be put under the users’ control with Free Software
that is easy to use.  

[^snake-oil]: We mean effective cryptography. If the service
provider enables cryptography but controls the keys or encrypts
the data with your password, it’s probably [snake oil][Snake Oil].

[Snake Oil]: https://en.wikipedia.org/wiki/Snake_oil_%28cryptography%29

Some services allow users to submit data with the intention to
make it publicly available for all. Even in these cases, some
amount of user data is kept private (e.g. metadata or social graph
data). The user should also have control over this data.

When users make data available to others, whether to a restrictive
group of people or to large groups, they should be able to decide
under which permissions they grant access to this data. However,
this right is not absolute and should not extend over others’
rights to use the data once it has been made available to them.
What’s more, it does not mean that users should have the right to
impose unfair restrictions to other people. 

Ultimately, to ensure that user data is under the users’ control,
the best technical designs include peer-to-peer or distributed
systems, and unhosted applications. Legally, that means terms of
service should respect users’ rights.

When users use centralised services that uploads data to specific
storage providers instead of relying on peer-to-peer systems, it
is important to know where the providers might store data because
they could be compelled by governments to turn over data they have
in their possession. 

In the long term, all users should have their own server.
Unfortunately, this is made very difficult by some Internet access
providers that restrict their customers unfairly. Also, being your
own service provider often means having to administer systems
which require expertise and time that most people currently don’t
have.


But it is also important that users are not stuck into a specific
technical solution. This is why people should always be able to
leave a platform and settle elsewhere. It means users should be
able to have their data in an open format, and to exchange
information with an open protocol. [Open standards] are standards
that are free of copyright and patent constraints. Obviously,
without the source code of the programs used to deal with user
data, this is impractical. This is why programs should be
distributed under a Free Software license.

[Open standards]: http://fsfe.org/activities/os/def.html

-----

FAQ:

1. what’s *not* user data?

User data is not necessarily private data and does not necessarily
relate to a person or contains personally identifiable
information. Thus, this manifesto does not aim at modifying
personal data regulations, but rather aim at complementing them.

Anonymously “dumped” data, e.g. on pastebin, or data that can be
edited directly by anybody, e.g. a public etherpad, do not usually
deal with user data.

-----



TODO:

 - need to explain with examples and simple worlds why rule #1
   needs cryptography and what we should aim at. By default, if I
   share something privately
 - maybe add another rule or another paragraph in rule #1 to
   address metadata/surveillance
