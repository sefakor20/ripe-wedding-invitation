# 💍 Product Requirements Document (PRD)
## Richard & Peace Wedding Invitation Landing Page

---

### 🧑‍🤝‍🧑 Project Overview
Design and develop a **modern, elegant, and mobile-responsive wedding invitation landing page** for:

- **Groom:** Richard Kwame Bansa  
- **Bride:** Peace Kafui Anyormi-Kpatsa  

The page should showcase the couple, outline event details, RSVP contacts, and provide gifting and Q&A sections — reflecting sophistication, warmth, and love.

---

### 🎯 Objectives
- Create an aesthetically pleasing digital wedding invitation.
- Present clear details about the ceremony and reception.
- Provide RSVP and gift options for guests.
- Support both desktop and mobile displays.

---

### 🎨 Design Requirements

#### Color Palette
- **Emerald Green** — Primary color  
- **Gold** — Accent and highlights  
- **White** — Background / base color  

#### Typography
- Elegant serif/script fonts: **Playfair Display**, **Great Vibes**, or **Cormorant Garamond**
- Clean sans-serif fonts: **Poppins** or **Lato** for body text

#### Visual Style
- Modern, minimal, and romantic
- Subtle animations (fade, slide-in, parallax)
- Use gold borders, floral accents, and soft lighting
- Responsive and mobile-first design

---

### 🧩 Functional Requirements

#### 1. Cover Section
- Two design variations:
  - **Version A:** Minimal cover with couple names and date (no RSVP)
  - **Version B:** Full-screen hero image with overlay text
- Include:
  - Couple names  
  - Subheading: “Join us as we celebrate our love”  
  - Location: *Tanyigbe-Etoe, Ho – Volta Region*  
  - Animated scroll-down indicator

---

#### 2. Event Details Section
- Header: “Our Special Day”
- Timeline layout or icon-based structure:
  - **Part 1:** Engagement Ceremony  
  - **Part 2:** Exchange of Vows  
  - **Part 3:** Marriage Registry (Private)  
  - **Part 4:** Reception
- Display time and venue elegantly with dividers.

---

#### 3. Dress Code
- Highlight colors: Emerald Green, Gold, and White
- Show 3 color swatches
- Text: “Dress to complement our love in these colors.”

---

#### 4. Ceremony Note
> “Ceremony is strictly by invitation. While we would love to have you on our guest list, please leave our little nephews and nieces at home for an intimate adults-only event. Please note, your access card will be required for the reception venue.”

Styled with italics or cursive gold text.

---

#### 5. Gifting Section
> “The presence and prayers of our family and friends is the greatest gift of all.  
> However, if you desire to bless us with a gift, we would greatly appreciate any home essential gift and above all, a cash gift.”

Include buttons:
- **View Gift Registry**
- **Send a Cash Gift**

---

#### 6. Payment Details
Display in a card box:
- **MTN:** 0243493973  
- **Account Name:** Richard Kwame Bansah  

---

#### 7. RSVP Section
- Title: “Confirm Your Attendance”
- Display RSVP contacts:
  - Emmanuella Avornyo – 0535624657  
  - Austin Kpatsa – 0531430929  
  - Raphael Sefakor Adinkrah – 0548828183
- Include RSVP form with:
  - Name  
  - Phone  
  - Attendance (Attending / Unable to Attend)  
  - Message (optional)

---

#### 8. Q&A Section (FAQ)
Accordion format with the following items:

| Question | Answer |
|-----------|---------|
| **Can I bring a date?** | If they’re your soulmate, yes. If they’re your third social media date, maybe not. Check your invite! |
| **Are kids welcome?** | Absolutely! We love little ones and would be happy to have them join the celebration. |
| **Where should I park?** | Worry Less! |
| **What should I wear?** | See dress code above. |
| **Is the wedding indoors or outdoors?** | Our wedding ceremony is outdoors 😁 |
| **Is it okay to take pictures?** | Yes! Please take photos and share with us on Google Drive to relive the memories. |
| **Do I have to dance?** | It’s not mandatory, but peer pressure is real. Aunties will drag you! |
| **Whom should I call with questions?** | Use the RSVP contacts above. |
| **Is there a gift registry?** | Feel free to check our Registry 😁❤️ and support us in any way you can. |

---

#### 9. Location Section
Embed Google Map or show a static map image:
> **Venue:** Lawyer Kpatsa Residence, Tanyigbe-Etoe, Ho – Volta Region

---

#### 10. Footer
- Text: “With love, Richard & Peace ❤️”
- Optionally include registry, RSVP, and location links.

---

### ⚙️ Technical Requirements
- Use **HTML5**, **CSS3 (TailwindCSS preferred)**, and **JS/React/Vue**.
- Fully responsive and optimized for mobile.
- Include smooth scroll animations and lazy loading for images.
- SEO-friendly meta tags (names, date, and location).
- Optional: deployable as a static page (Netlify, Vercel, etc.)
- If RSVP is functional, integrate a simple backend endpoint.

---

### ✅ Acceptance Criteria
- Page adheres to defined palette and typography.
- All sections display correctly on mobile and desktop.
- RSVP form validates and submits correctly.
- Q&A section collapses/expands smoothly.
- Load time under 3 seconds on mobile.

---

## 💻 Implementation Prompt

> **Prompt:**  
> Implement the **Richard & Peace Wedding Invitation Landing Page** based on the PRD above.  
> - Use **TailwindCSS** for styling and **HTML/React/Vue** for structure.  
> - Include all sections (Cover, Event Details, Dress Code, Ceremony Note, Gifting, Payment, RSVP, FAQ, Location, Footer).  
> - Use **Emerald Green (#046307)**, **Gold (#C5A15C)**, and **White (#FFFFFF)** as theme colors.  
> - Typography: *Playfair Display*, *Great Vibes*, *Lato*.  
> - Include smooth scroll, fade animations, and lazy-loaded images.  
> - RSVP form should collect name, phone, and attendance response.  
> - Ensure full accessibility, responsiveness, and clean, modular code.  
> - Add a footer: “With love, Richard & Peace ❤️”.  
> - Optimize performance and readability.

---

