# 💍 Product Requirements Document (PRD)
## Richard & Peace Wedding Invitation Landing Page
**Framework:** Laravel 11 + Livewire 3 + Alpine.js + TailwindCSS

---

### 🧑‍🤝‍🧑 Project Overview
Develop a **modern, elegant, and mobile-responsive wedding invitation landing page** for:

- **Groom:** Richard Kwame Bansa  
- **Bride:** Peace Kafui Anyormi-Kpatsa  

The page should beautifully present their story, event details, RSVP form, and Q&A section while reflecting sophistication, warmth, and love.

---

### 🎯 Objectives
- Create a clean, interactive, and responsive wedding invitation site.
- Showcase all event details and instructions in an elegant format.
- Allow guests to RSVP seamlessly with Livewire.
- Implement animations and interactivity using Alpine.js.
- Optimize for both mobile and desktop.

---

### ⚙️ Tech Stack
- **Backend:** Laravel 12  
- **Frontend:** TailwindCSS + Alpine.js  
- **Interactivity:** Livewire 3  
- **Deployment:** Laravel Forge / Shared Hosting / VPS (optional Netlify/Vercel for frontend builds)
- **Storage:** Local or database for RSVP submissions  

---

### 🎨 Design Requirements

#### Color Palette
- **Emerald Green:** `#046307` (primary)  
- **Gold:** `#C5A15C` (accent)  
- **White:** `#FFFFFF` (background)  

#### Typography
- Headings: *Playfair Display*, *Cormorant Garamond*  
- Accent font: *Great Vibes* (for names, romantic lines)  
- Body text: *Lato* or *Poppins*

#### Visual Style
- Modern and romantic with floral or soft gold patterns.
- Light animations: fade-in, scroll reveal, hover transitions.
- Use minimalist white space and soft curves.
- Ensure readability and accessibility (WCAG 2.1 AA compliant).

---

### 🧩 Functional Requirements

#### 1. Cover Section (Hero)
- Two versions:
  - **Version A:** Simple cover with couple names and date (no RSVP)
  - **Version B:** Full-width image with overlay text
- Elements:
  - Couple names: *Richard & Peace*
  - Subtitle: *“Join us as we celebrate our love”*
  - Location: *Tanyigbe-Etoe, Ho – Volta Region*
  - Optional: countdown timer (Alpine.js)
  - Animated scroll-down arrow

---

#### 2. Event Details Section
- Header: “Our Special Day”
- Display as timeline or card layout:
  1. Engagement Ceremony  
  2. Exchange of Vows  
  3. Marriage Registry (Private)  
  4. Reception  
- Include icons or separators between parts.
- Optional: Animate each card on scroll (Alpine.js or CSS transitions)

---

#### 3. Dress Code Section
- Display color swatches for **Emerald Green**, **Gold**, and **White**.
- Caption: *“Dress to complement our love in these colors.”*

---

#### 4. Ceremony Note
> “Ceremony is strictly by invitation. While we would love to have you on our guest list, please leave our little nephews and nieces at home for an intimate adults-only event. Please note, your access card will be required for the reception venue.”

- Displayed in cursive font (Great Vibes) or italic serif with gold text.

---

#### 5. Gifting Section
> “The presence and prayers of our family and friends is the greatest gift of all.  
> However, if you desire to bless us with a gift, we would greatly appreciate any home essential gift and above all, a cash gift.”

- Include two buttons:
  - **View Gift Registry**
  - **Send a Cash Gift**
- Payment info below:
  - **MTN - 0243493973 - Richard Kwame Bansah**

---

#### 6. RSVP Section
**Livewire Component:** `RsvpForm`

- Title: “Confirm Your Attendance”
- Contacts:
  - Emmanuella Avornyo – 0535624657  
  - Austin Kpatsa – 0531430929  
  - Raphael Sefakor Adinkrah – 0548828183
- Form fields:
  - `name` (text)
  - `phone` (text)
  - `response` (radio: attending / unable to attend)
  - `message` (optional text area)
- Validations:
  - Name and phone are required.
  - Phone must be valid Ghanaian format.
- Show success message after submission.
- Store submissions in `rsvps` table.

**Table: rsvps**
| Field | Type | Description |
|--------|------|-------------|
| id | BIGINT | Primary key |
| name | STRING | Guest name |
| phone | STRING | Contact number |
| response | ENUM('attending', 'unable_to_attend') | RSVP choice |
| message | TEXT (nullable) | Optional note |
| created_at | TIMESTAMP | Submission time |

---

#### 7. Q&A Section (FAQ)
**Livewire/Alpine Interactive Accordion**

| Question | Answer |
|-----------|---------|
| **Can I bring a date?** | If they’re your soulmate, yes. If they’re your third social media date, maybe not. Check your invite! |
| **Are kids welcome?** | Absolutely! We love little ones and would be happy to have them join the celebration. |
| **Where should I park?** | Worry Less! |
| **What should I wear?** | See dress code above. |
| **Is the wedding indoors or outdoors?** | Our wedding ceremony is outdoors 😁 |
| **Is it okay to take pictures?** | Yes! Please take photos and share with us later. |
| **Do I have to dance?** | It’s not mandatory, but peer pressure is real. Aunties will drag you! |
| **Whom should I call with questions?** | Use the RSVP contacts above. |
| **Is there a gift registry?** | Feel free to check our Registry 😁❤️ and support us in any way you can. |

---

#### 8. Location Section
- Embed Google Map to:
  > **Lawyer Kpatsa Residence, Tanyigbe-Etoe, Ho – Volta Region**
- Optional: Static map image with “Get Directions” button linking to Google Maps.

---

#### 9. Footer
- Text: *“With love, Richard & Peace ❤️”*
- Include small social or registry links if available.

---

### 🧠 Interactivity Summary
| Feature | Tool |
|----------|------|
| RSVP form | Livewire component |
| Form validation | Livewire |
| Form feedback | Alpine transitions |
| Scroll animations | Alpine + CSS |
| FAQ accordion | Alpine.js |
| Countdown timer | Alpine.js (optional) |

---

### 📊 Database Tables
**rsvps**
| Field | Type | Description |
|--------|------|-------------|
| id | BIGINT | Primary key |
| name | STRING | Guest name |
| phone | STRING | Guest phone |
| response | ENUM('attending', 'unable_to_attend') | RSVP status |
| message | TEXT | Optional message |
| created_at | TIMESTAMP | Date submitted |

---

### ✅ Acceptance Criteria
- All sections match the design and content specified.
- Responsive on all devices.
- RSVP form submits and displays success message.
- FAQ expands and collapses smoothly.
- Page loads in < 3 seconds on mobile.
- Clean, semantic HTML with Tailwind classes.

---

## 💻 Implementation Prompt (for ChatGPT or Dev Setup)

> **Prompt:**  
> Implement the **Richard & Peace Wedding Invitation Landing Page** using **Laravel 11**, **Livewire 3**, **Alpine.js**, and **TailwindCSS**.  
> Follow the PRD structure:  
> - Sections: Cover, Event Details, Dress Code, Ceremony Note, Gifting, Payment, RSVP (Livewire), FAQ (Alpine), Location, and Footer.  
> - Use the color palette: Emerald Green `#046307`, Gold `#C5A15C`, White `#FFFFFF`.  
> - Include elegant fonts (*Playfair Display*, *Great Vibes*, *Lato*).  
> - Make the RSVP form functional and store data in `rsvps` table.  
> - Add soft animations and transitions using Alpine.js.  
> - Ensure responsive design for mobile and desktop.  
> - Optimize images, accessibility, and load performance.  
> - End with a footer that reads: **“With love, Richard & Peace ❤️”**.  
> - Deliver clean, modular Blade views and Livewire components.

---

