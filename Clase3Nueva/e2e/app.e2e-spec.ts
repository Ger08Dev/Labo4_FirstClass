import { Clase3NuevaPage } from './app.po';

describe('clase3-nueva App', function() {
  let page: Clase3NuevaPage;

  beforeEach(() => {
    page = new Clase3NuevaPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
